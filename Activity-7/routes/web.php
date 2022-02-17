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

Route::get('/students','App\Http\Controllers\databaseController@show1');
Route::get('/teachers','App\Http\Controllers\databaseController@show2');
Route::get('/assignments','App\Http\Controllers\databaseController@show3');
Route::get('/marks','App\Http\Controllers\databaseController@show4');