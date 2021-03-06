<?php
/**
 * Created by PhpStorm.
 * User: javad
 * Date: 6/13/20
 * Time: 11:59 AM
 */


if ($errors->any()){
    $title = old("title") ;
    $price = old("price") ;
    $description =  old("description") ;
    $itemType =  old("itemType") ;
    $id =  old("id") ;
}
else{
    $title = $item->i_title  ;
    $price = $item->i_price  ;
    $description = $item->i_description ;
    $itemType =  $item->i_it_id;
    $id = $item->i_id ;
}


?>

@extends('layouts.master')
@section('title', "new item")
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-block">
                <h4 class="card-title">New Item</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('saveItem')   }}" method="post" class=" wizard-circle" enctype="multipart/form-data">
                            @csrf
                            <input type="text" id="id" name="id" value="{{ $id }}" style="display: none"  />
                            <div class="form-group row">
                                <label for="title" class="col-2 col-form-label">Title</label>
                                <div class="col-10">
                                    <input required  class="form-control warning" type="text" value="{{ $title }}" name="title" id="title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-2 col-form-label">Price</label>
                                <div class="col-10">
                                    <input required class="form-control" type="text" value="{{ $price }}" name="price" id="price">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="itemType" class="col-2 col-form-label">Item Type</label>
                                <div class="col-10">
                                    <select required class="custom-select col-12"  name="itemType" id="itemType">
                                        <option >Choose...</option>
                                        @foreach ($itemTypeList as $type)

                                            <option
                                                    @if ($type->it_id == $itemType)
                                                        {{"selected"}}
                                                    @endif
                                                     value="{{ $type->it_id }}">{{ $type->it_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea required id="description"   name="description" class="form-control" rows="5"> {{ $description }}</textarea>
                            </div>
                            <section>
                                <h3 class="box-title m-t-40"> Choose Image</h3>
                                <hr>
                                <label for="input-file-now-custom-3">Upload an image your items</label>
                                <input type="file" name="file" id="file"  class="dropify" data-height="230"
                                       data-default-file="" />
                                <input type="text" style="display: none;" name="imageName">
                            </section>

                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                            <button type="reset" class="btn btn-inverse waves-effect waves-light m-r-10">Cancel</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
