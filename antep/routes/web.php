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
    return view('layout.index-master');
});

Route::get('/About', 'App\Http\Controllers\HomeController@show');
Route::get('/ShowProducts', 'App\Http\Controllers\HomeController@ShowProducts');
Route::get('/UserProducts', 'App\Http\Controllers\HomeController@ShowUserProducts');

//products
Route::get('/AddProduct', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/SaveProduct', 'App\Http\Controllers\ProductController@store')->name('product.save');
Route::get('/Products', 'App\Http\Controllers\ProductController@index');
Route::get('/export-product', 'App\Http\Controllers\ProductController@export')->name('product.export');
Route::get('/delete-slider/{id}', 'App\Http\Controllers\ProductController@destroy')->name('delete.slider')->where(array('id'=>'[0-9]+'));

Route::get('/reqSms', 'App\Http\Controllers\SmsController@smsFrom')->name('smsReq');
Route::post('/PostSms', 'App\Http\Controllers\SmsController@SendSMS')->name('smsPost');
/**
 * Categories
 */
Route::get('/upload-categories', 'App\Http\Controllers\CategoryController@upload')->name('category.upload');
Route::post('/import-categories', 'App\Http\Controllers\CategoryController@import')->name('category.import');
