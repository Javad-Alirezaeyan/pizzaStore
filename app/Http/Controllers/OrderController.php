<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use App\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use \App\Http\Resources\Item as ItemResource;
use \App\Http\Resources\Order as OrderResource;

class OrderController extends Controller
{
    //

    public function list(Request $request)
    {

        $itemList = Order::paginate(TABLE_ROWS_COUNT);
        return view("order.list",
            [
                'itemList' => $itemList
            ]);
    }

    public function save(Request $req)
    {
        //validating the input values
        $validator = Validator::make($req->all(),
            [
                'firstName'=>'required|min:3|max:200',
                'lastName'=> 'required|min:3|max:200',
                'address'=> 'required|min:3|max:500',
                'phoneNumber'=> 'numeric'
            ]
            );

        if ($validator->fails()) {
            return Response::json(
                [
                    "status"=> "error",
                    "message" => "the input values are wrong",
                    "error"=>  $validator->errors()
                ], 200);
        }


        $listItem = $req->get('list', '[]');
        $firstName = $req->get('firstName', null);
        $lastName = $req->get('lastName', null);
        $address = $req->get('address', null);
        $phoneNumber = $req->get('phoneNumber', null);

        $objOrder = new Order();

        $objOrder->o_customerName = $firstName." ".$lastName;
        $objOrder->o_customerAddrees = $address;
        $objOrder->o_customerPhone = $phoneNumber;
        $objOrder->save();

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

        $objOrder->o_totalPrice = $orderTotalPrice;
        $objOrder->save();

        return Response::json([
            'status' => "ok",
            'invoiceId' => $objOrder->o_id
        ]);
    }
}
