<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Item extends JsonResource
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
            'id' => $this->i_id,
            'title'=> $this->i_title,
            'image'=>  route("itemImage",$this->i_mainImage) ,
            'description' => $this->i_description,
            'price' => $this->i_price,
            'typeTitle'=> $this->it_title,
            'idType'=> $this->it_id,
        ];
    }
}
