<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/11/20
 * Time: 9:43 AM
 */

?>


@extends('layouts.master')

@section("slideShow")
    <div class="">
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-responsive" src="{{asset("storetheme/images/slider-img1.jpg")}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Pizza 1</h3>
                        <p>Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-responsive" src="{{asset("storetheme/images/slider-img2.jpg")}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Pizza 2</h3>
                        <p>Pizza 2 Pizza 2 Pizza 2 Pizza 2 Pizza 2 Pizza 2 </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-responsive" src="{{asset("storetheme/images/slider-img1.jpg")}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Pizza 3</h3>
                        <p>Pizza 3 Pizza 3 Pizza 3 Pizza 3</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div id="Menu" class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pizzaTab" role="tab">Pizza</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="##hamburgerTab" role="tab">Hamburger</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sodaTab" role="tab">Soda</a> </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="pizzaTab" role="tabpanel">
                <div class="card-block">
                    <div id="pizza"></div>
                </div>
            </div>
            <div class="tab-pane active" id="hamburgerTab" role="tabpanel">
                <div class="card-block">
                    <div id="hamburger"></div>
                </div>
            </div>
            <div class="tab-pane active" id="sodaTab" role="tabpanel">
                <div class="card-block">
                    <div id="soda"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
