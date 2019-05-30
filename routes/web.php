<?php

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

/*
 * Merchant
 */
Route::group(['prefix'=> 'merchants', 'as' => 'merchants.'], function () {
    Route::get('/{merchant}', 'MerchantController@show')->name('show');
});
