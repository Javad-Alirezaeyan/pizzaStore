<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/14/20
 * Time: 11:34 PM
 */

namespace App\library;


class Delivery
{

    protected $delivery_rate = 2;

    public function __construct()
    {

    }

    public function getRate(){
        return $this->delivery_rate;
    }



}