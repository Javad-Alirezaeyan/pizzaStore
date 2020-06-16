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
     * this method shows a form to create a new item or set a form to editing a registered item
     */
    public function new(Request $req, $id =null)
    {

        if(!$id){
            // it is a new item
            $item = new Item();
        }
        else{
            // editing an old item
            $item = Item::findOrFail($id);
        }
        //get all item types
        $itemTypeList = ItemType::all();

        return view("item.new",
            [
                'itemTypeList' =>  $itemTypeList,
                 'item' => $item,
                'id' =>$id
                ]
            );
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * this method receives the parameters for a item and save to database. After submitting it redirects to 'itemList' route
     */
    public function save(ItemPost $req)
    {
        //validation
        $req->validated();

        // if the item is exist it will be updated, else it creates a new one
        $item = Item::updateOrCreate(
            ['i_id' => $req->id],
            [
                'i_title' => $req->title,
                'i_it_id' => $req->itemType,
                'i_description' => $req->description,
                'i_price' => $req->price
            ]
        );

        // check and save the uploaded file
        if ($req->file != "") {

            $filename = "item-" . $item->i_id . '.' . request()->file->getClientOriginalExtension();
            $req->file("file")->storeAs(ImagePath, $filename);
            $item->i_mainImage = $filename;
        }

        $item->save();

        //redirect to the item list
        return redirect()->route('itemsList');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * this method renders the list of all items, but it is paginated by a default number
     */
    public function list(Request $request)
    {
        // the type of items
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
     * this method returns the list of items in json format. This is useful when the front-end wants to get all items showing in the menu
     * The items will be edited by a resource file creating a pretty json format
     * this method must be called by AJAX
     */
    public function jsonList(Request $request)
    {
        $type = $request->get("type", null);

        $where = [];
        if ($type) {
            array_push($where, ['i_it_id', '=', $type]);
        }

        $itemList = ItemResource::collection(Item::all());

        // here the are grouped based on their types
        $newItemList =[];
        $itemTypes = ItemType::all();
        foreach ($itemTypes as $type){
            $newItemList[$type['it_id']] = ['idType'=>$type['it_id'], 'itemTitle'=>$type['it_title'], 'list'=>[]];
        }

        foreach ($itemList as $item){
            array_push($newItemList[$item['i_it_id']]['list'], $item);
        }
        //removing keys of array
        $newItemList = array_values($newItemList);

        return Response::json(
            [
                'status' => "ok",
                'itemList'=> $newItemList
            ], 201);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * this method uses to change state of an item. this method must be called by AJAX
     *
     */
    public function changeState(Request $request)
    {
        $id = $request->get('id', null);
        $state = $request->get('state', null);

        $objItem = Item::findOrFail($id);
        $objItem->i_lock = $state === LOCKED_ITEM ? true : false;
        $objItem->save();

        return Response::json(
            [
                'status' => "ok",
            ], 201);

    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * This method deletes an item. There is an soft delete, no hard delete!
     */
    public function delete(Request $request, $id)
    {
        $objItem = Item::findOrFail($id);
        $objItem->delete();
        return redirect()->back();
    }

}
