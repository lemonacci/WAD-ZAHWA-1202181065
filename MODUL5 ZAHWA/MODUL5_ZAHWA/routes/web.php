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

Route::get('/home', 'App\Http\Controllers\InventoryController@home')->name('home');
Route::post('/product', 'App\Http\Controllers\InventoryController@product')->name('product');
Route::get('/order', 'App\Http\Controllers\InventoryController@order')->name('order');
Route::get('/history', 'App\Http\Controllers\InventoryController@history')->name('history');
Route::post('/inputp', 'App\Http\Controllers\InventoryController@inputp')->name('inputp');
Route::post('/addorder', 'App\Http\Controllers\InventoryController@addorder')->name('addorder');
Route::get('/edit/{id}','App\Http\Controllers\InventoryController@edit')->name('edit');
Route::post('/update','App\Http\Controllers\InventoryController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\InventoryController@delete')->name('delete');
Route::get('/ordernow/{id}', 'App\Http\Controllers\InventoryController@ordernow')->name('ordernow');


// Route::get('/', function () {
//     return view('home');
// })->name('home');

// Route::get('/product', function () {
//     return view('product');
// })->name('product');

Route::get('/prodinput', function () {
    return view('prodinput');
})->name('prodinput');

Route::get('/produpdate', function () {
    return view('produpdate');
})->name('produpdate');

// Route::get('/order', function () {
//     return view('order');
// })->name('order');

Route::get('/orderadd', function () {
    return view('orderadd');
})->name('orderadd');

// Route::get('/history', function () {
//     return view('history');
// })->name('history');
