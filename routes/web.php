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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     
// })->middleware(['auth.shopify'])->name('home');
Route::get('/', 'homeController@index')->middleware(['auth.shopify'])->name('home');
Route::post('/save-address', 'homeController@save_address')->name('save-address');
Route::get('/get-address', 'homeController@get_address')->name('get-address');
Route::get('/get-address2', 'homeController@get_address2')->name('get-address2');
Route::get('/delete-address', 'homeController@delete_address')->name('delete-address');
Route::get('/count-all', 'homeController@countall')->name('count-all');
Route::post('/upload-csv', 'homeController@uploadCSV')->name('upload-csv');
Route::post('/save-address2', 'homeController@save_address2')->name('save-address2');
Route::post('/update', 'homeController@update_address')->name('update');

