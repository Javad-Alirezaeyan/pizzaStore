<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/11/20
 * Time: 9:43 AM
 */

?>


@extends('layouts.master')

@section('content')
    <!-- start flexslider -->
    <div class="col-lg-12">
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
                        <h3 class="text-white">First title goes here</h3>
                        <p>this is the subcontent you can use this</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-responsive" src="{{asset("storetheme/images/slider-img2.jpg")}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Second title goes here</h3>
                        <p>this is the subcontent you can use this</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-responsive" src="{{asset("storetheme/images/slider-img1.jpg")}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Third title goes here</h3>
                        <p>this is the subcontent you can use this</p>
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


    <div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pizza" role="tab">Pizza</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Hambergue</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Soda</a> </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="pizza" role="tabpanel">
                <div class="card-block">
                    <div id="foodMenu"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- end flexslider -->
@endsection
