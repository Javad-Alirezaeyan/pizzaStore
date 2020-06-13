<?php

namespace App\Http\Controllers;

use App\ItemType;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    protected $layout = 'layouts.master';

    public function index()
    {
        $itemTypeList = ItemType::all();
        return view("site.mainpage",
            [
                'itemList' => $itemTypeList
            ]
            );
    }

    public function login()
    {
        return view('auth.login');
    }

    public function basket()
    {
        return view('site.orderwizard');
    }
}
