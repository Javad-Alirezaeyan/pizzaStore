<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemPost;
use App\Item;

use App\ItemType;
use Illuminate\Http\Request;
use App\Http\Resources\Item as ItemResource;
use Illuminate\Support\Facades\Response;

class ItemController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function new(Request $req, $id =null)
    {

        if(!$id){
            $item = new Item();
        }
        else{
            $item = Item::findOrFail($id);
        }

        $itemTypeList = ItemType::all();
        return view("item.new",
            [
                'itemTypeList' =>  $itemTypeList,
                 'item' => $item
                ]
            );
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(ItemPost $req)
    {
        $req->validated();

        $item = Item::updateOrCreate(
            ['i_id' => $req->id],
            [
                'i_title' => $req->title,
                'i_it_id' => $req->itemType,
                'i_description' => $req->description,
                'i_price' => $req->price
            ]
        );

        if ($req->file != "") {
            $filename = "item-" . $item->i_id . '.' . request()->file->getClientOriginalExtension();
            $req->file("file")->storeAs(ImagePath, $filename);
            $item->i_mainImage = $filename;
        }
        $item->save();
        return redirect()->route('itemsList');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
    {
        $type = $request->get("type", null);

        $where = [];
        if ($type) {
            array_push($where, ['i_it_id', '=', $type]);
        }

        $itemList = Item::get($where, true);

        return view("item.list",
            [
                'itemList' => $itemList
            ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function jsonList(Request $request)
    {
        $type = $request->get("type", null);

        $where = [];
        if ($type) {
            array_push($where, ['i_it_id', '=', $type]);
        }
        $itemList = ItemResource::collection(Item::all());

        // grouping
        $newItemList =[];
        $itemTypes = ItemType::all();
        foreach ($itemTypes as $type){
            $newItemList[$type['it_id']] = ['itemTitle'=>$type['it_title'], 'list'=>[]];
        }

        foreach ($itemList as $item){
            array_push($newItemList[$item['i_it_id']]['list'], $item);
        }

        return Response::json(
            [
                'status' => "ok",
                'itemList'=> $newItemList
            ], 201);
    }




    public function changeState(Request $request)
    {
        $id = $request->get('id', null);
        $state = $request->get('state', null);

        $objItem = Item::findOrFail($id);
        $objItem->i_lock = $state === 1 ? true : false;
        $objItem->save();

        return Response::json(
            [
                'status' => "ok",
            ], 201);

    }

    public function delete(Request $request)
    {
        $id = $request->get('id', null);

        $objItem = Item::findOrFail($id);
        $objItem->delete();
        return redirect()->back();
    }

}
