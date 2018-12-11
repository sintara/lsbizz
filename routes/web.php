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
    return view('front/home');
});
Route::get('/contact', function () {
    return view('front/contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('front.products');
Route::get('/brands', 'BrandController@index')->name('front.brands');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
