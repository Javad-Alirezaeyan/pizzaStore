<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //
    protected $table = "orderItems";
    protected $primaryKey = 'oi_id';

    public static  function  getItemOrder($where =null){

        return OrderItems::where($where)->
        join('item' , "oi_itemId" , '=', 'i_id')->get();
    }
}
