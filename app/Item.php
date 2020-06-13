<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'item';
    protected $primaryKey = 'i_id';
    protected $fillable = ['i_title', 'i_description', 'i_mainimage', 'i_price', 'i_it_id', 'created_at', 'updated_at'];

    public static function get($where, $paginate = false)
    {
        $query = Item::where($where)->join('itemType' , "it_id", '=' , 'i_it_id');
        if($paginate){
            return $query->paginate(TABLE_ROWS_COUNT);
        }
        return $query->get();

    }
}
