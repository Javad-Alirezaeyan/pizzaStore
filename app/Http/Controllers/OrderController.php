<?php

namespace App\Http\Controllers;

use App\Item;
use App\library\Delivery;
use App\Order;
use App\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * this functions renders all orders and paginates them
     */
    public function list(Request $request)
    {

        $itemList = Order::paginate(TABLE_ROWS_COUNT);
        return view("order.list",
            [
                'itemList' => $itemList
            ]);
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\JsonResponse
     * When a customer send the parameters to register a order, this method  is called
     * This method returns a json response
     */
    public function save(Request $req)
    {

        //validating the input values
        $validator = Validator::make($req->all(),
            [
                'firstName'=>'required|min:3|max:200',
                'lastName'=> 'required|min:3|max:200',
                'address'=> 'required|min:3|max:500'
            ]
            );

        if ($validator->fails()) {
            return Response::json(
                [
                    "status"=> "error",
                    "message" => "the input values are wrong",
                    "error"=>  $validator->errors()
                ], 400);
        }


        $listItem = $req->get('list', '[]');
        $firstName = $req->get('firstName', null);
        $lastName = $req->get('lastName', null);
        $address = $req->get('address', null);
        $phoneNumber = $req->get('phoneNumber', null);

        //find the rate of delivery
        $objDelivery =  new Delivery();
        $deliveryRate = $objDelivery->getRate();

        //creating an new order
        $objOrder = new Order();
        $objOrder->o_customerName = $firstName." ".$lastName;
        $objOrder->o_customerAddrees = $address;
        $objOrder->o_customerPhone = $phoneNumber;
        $objOrder->o_deliveryPrice = $deliveryRate;
        $objOrder->save();

        //save  requested items by the customer
        $orderTotalPrice = 0;
        foreach ($listItem as $item){

            $objItem = Item::findOrFail($item['id']);

            $totalPrice = $objItem->i_price * $item['count'];
            $orderTotalPrice += $totalPrice;

            $objOrderItems = new OrderItems();
            $objOrderItems->oi_itemId = $item['id'];
            $objOrderItems->oi_quantity = $item['count'];
            $objOrderItems->oi_unitPrice = $objItem->i_price;
            $objOrderItems->oi_totalPrice = $totalPrice;
            $objOrderItems->oi_orderId = $objOrder->o_id;
            $objOrderItems->save();
        }

        //saving price in the 'Order' model
        $objOrder->o_totalPrice = $orderTotalPrice;
        $objOrder->o_finalPrice = $orderTotalPrice + DELIVERY_PRICE;
        $objOrder->save();

        return Response::json([
            'status' => "ok",
            'invoiceId' => $objOrder->o_id
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * this method renders the detail of an order
     */
    public function view(Request $request, $id)
    {
        $objOrder = Order::findOrFail($id);
        $itemList = OrderItems::getItemOrder([['oi_orderId', '=', $id]]);
        return view("order.view",
            [
                'itemList' => $itemList,
                'order' => $objOrder
            ]);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     * this method return the percentage of sale item types to feeding pie char in the dashboard
     */
    public function getPercentOfEachItemType(){

        $orderItems = OrderItems::getItemOrder();
        $totalPrice = 0;
        $percentItems = [];
        foreach($orderItems as $item){
            if( !isset($percentItems[$item['it_id']])){
                $percentItems[$item['it_id']] = [$item['it_title'], 0];
            }
            else{
                $percentItems[$item['it_id']][1] += $item['oi_totalPrice'];
            }
            $totalPrice +=  $item['oi_totalPrice'];
        }

        $percentItems =  array_values($percentItems);

        return  Response::json([
            'status'=> 'ok',
            'percentage' => $percentItems
        ]);
    }
}
