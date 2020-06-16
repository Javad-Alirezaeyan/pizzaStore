<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use App\OrderItems;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->dashboard();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * this method shows the dashboard page, this method will be directly requested after login
     */
    public function dashboard(){
        return view('home.dashboard',
            [
                'totalPrice' => OrderItems::sum("oi_totalPrice"),
                'itemCount' => Item::count(),
                'orderCount' => Order::count()
            ]);
    }


}
