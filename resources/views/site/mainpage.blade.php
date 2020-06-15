
@extends('layouts.master')
@section('title', "home")
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
                    <img class="d-block img-responsive"  src="{{asset("images/slider-1.jpg")}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Pizza 1</h3>
                        <p>Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1 Pizza 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-responsive"  src="{{asset("images/slider-2.jpg")}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Pizza 2</h3>
                        <p>Pizza 2 Pizza 2 Pizza 2 Pizza 2 Pizza 2 Pizza 2 </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-responsive"  src="{{asset("images/slider-3.jpg")}}" alt="Third slide">
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

    </div>

@endsection
