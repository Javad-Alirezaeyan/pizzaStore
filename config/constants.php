<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/15/20
 * Time: 1:08 AM
 */


return [
    'orderState' => [
        ORDER_REGISTERED=> ['title'=>"Registered", 'cssClass'=>"warning"],
        ORDER_DELIVERED => ['title'=>"Delivered", 'cssClass'=>"success"],
        ORDER_PAYED => ['title'=>"Payed", 'cssClass'=>"primary"],
        ORDER_REJECTED => ['title'=>"Rejected", 'cssClass'=>"danger"],
    ]
];

?>