<?php

namespace App\Http\Controllers;

use App\Item;

use App\ItemType;
use Illuminate\Http\Request;
use App\Http\Resources\Item as ItemResource;
use Illuminate\Support\Facades\Response;

class ItemController extends Controller
{
    //

    public function new()
    {
        $itemTypeList = ItemType::all();
        return view("item.new",
            [
                'itemTypeList' =>  $itemTypeList
            ]
            );
    }

    public function save(Request $req)
    {
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

    public function list(Request $request)
    {
        return view("item.list",
            [
                'itemList' => $this->createList($request)
            ]);
    }

    public function jsonList(Request $request)
    {

        return Response::json(
            [
                'status' => "ok",
                'list'=> $this->createList($request)
            ], 201);
    }

    private function createList($request){
        $type = $request->get("type", null);

        $where = [];
        if (!$type) {
            array_push($where, ['i_it_id', '=', $type]);
        }
        return new ItemResource(Item::get($where));
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
