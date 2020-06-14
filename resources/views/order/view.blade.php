<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/14/20
 * Time: 11:49 PM
 */
?>



@extends("layouts.master")
@section('title', "order")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-block printableArea">
                <h3><b>INVOICE</b> <span class="pull-right">factor Id: {{ $order->o_id }}</span></h3>
                <hr/>
                <div class="row">
                    <div class="col-md-12">

                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Customer Info</b></h3>
                                <p class="text-muted m-l-5">
                                    <br/> {{$order->o_customerName}}
                                    <br/> {{ $order->o_customerAddress }}
                                    <br/> {{ $order->o_customerPhone }}
                            </address>

                        </div>
                        <div class="pull-right text-right">


                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{ $i = 1 }}
                                    @foreach($itemList as $item)
                                        <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                          <img src="{{ route("itemImage", $item->i_mainImage) }}" alt="user" width="40"
                                                 class="img-container"/>
                                            {{$item->i_title}}
                                        </td>
                                        <td>{{$item->oi_quantity}}</td>
                                        <td>{{$item->oi_unitPrice}}</td>
                                        <td>{{$item->oi_totalPrice}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <div class="pull-right m-t-30 text-right">
                                    <p>Sub - Total amount: ${{ $order->o_totalPrice  }}</p>
                                    <p>Delivery Price : ${{ $order->o_deliveryPrice }} </p>
                                    <hr/>
                                    <h3><b>Total :</b> ${{ $order->o_finalPrice  }}</h3>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection