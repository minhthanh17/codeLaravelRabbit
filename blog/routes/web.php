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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'shops', 'namespace' => 'Shops'], function () {
    Route::get('{shopId}/new_construction_shop_detail/edit', 'NewConstructionController@show')->name('shops.new_construction');
    Route::put('{shopId}/new_construction_shop_detail/edit', 'NewConstructionController@update')->name('shops.new_construction.update');
});
