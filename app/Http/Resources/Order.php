<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Order extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return[
            'id' => $this->o_id,
            'price'=> $this->o_finalPrice,
            'date'=>  $this->created_at,
            'state' =>$this->o_state ,
            'customerName' => $this->o_customerName,
        ];

    }
}
