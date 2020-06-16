<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    //
    use SoftDeletes;

    protected $table = 'item';
    protected $primaryKey = 'i_id';
    protected $fillable = ['i_title', 'i_description', 'i_mainimage', 'i_price', 'i_it_id', 'created_at', 'updated_at'];

    /**
     * @param $where
     * @param bool $paginate
     * @return mixed
     * this method returns the items
     */
    public static function get($where, $paginate = false)
    {
        $query = Item::where($where)->join('itemType' , "it_id", '=' , 'i_it_id');
        if($paginate){
            return $query->paginate(TABLE_ROWS_COUNT);
        }
        return $query->get();

    }
}
