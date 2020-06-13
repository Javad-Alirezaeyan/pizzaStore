<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $primaryKey = 'o_id';

   // protected $fillable = ['o_address', 'created_at', 'updated_at'];

    public function get($where = [])
    {

    }
}
