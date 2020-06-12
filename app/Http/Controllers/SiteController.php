<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    protected $layout = 'layouts.master';

    public function index()
    {
        return view("site.mainpage");
    }

    public function order()
    {
        return view('site.orderwizard');
    }
}
