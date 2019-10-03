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


Route::get('/login', 'AuthsController@login')->name('login');
Route::get('/logout', 'AuthsController@logout');
Route::post('/postlogin', 'AuthsController@postlogin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/product', 'ProductController@index');
    Route::post('/product/store', 'ProductController@store');

    Route::get('/transaction', 'TransactionController@index');
    Route::get('/transaction/show', 'TransactionController@show');
    Route::get('/transaction/showid/{id}', 'TransactionController@showid');
});
