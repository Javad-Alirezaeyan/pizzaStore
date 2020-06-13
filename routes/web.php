<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'SiteController@index');
Route::get('/basket', 'SiteController@basket')->name('basket');

Auth::routes();

Route::middleware("auth")->group(function(){
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::get('/orders', 'OrderController@orderslist')->name('orders');


});


Route::get('/item', 'ItemController@new')->name('item');
Route::get('/item/{id}', 'ItemController@new')->name('editItem');
Route::post('/saveItem', 'ItemController@save')->name('saveItem');
Route::get('/deleteItem', 'ItemController@delete')->name('deleteItem');
Route::get('/itemsList', 'ItemController@list')->name('itemsList');
Route::get('/getItems', 'ItemController@jsonList')->name('getItems');
Route::get('/changeStateItem', 'ItemController@changeState')->name('changeStateItem');


