<?php

use Illuminate\Support\Facades\Route;

// Route::get('/todos', 'App\Http\Controllers\TodoController@index')->name('todo.index');

// Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');

// Route::get('/todos/{id}', 'App\Http\Controllers\TodoController@edit');

// Route::post('/todos/create', 'App\Http\Controllers\TodoController@store');

// Route::patch('/todos/{todo}/update', 'App\Http\Controllers\TodoController@update')->name('todo.update');

// Route::put('/todos/{todo}/complete', 'App\Http\Controllers\TodoController@complete')->name('todo.complete');

// Route::delete('/todos/{todo}/incomplete', 'App\Http\Controllers\TodoController@incomplete')->name('todo.incomplete');

// Route::delete('/todos/{todo}/delete', 'App\Http\Controllers\TodoController@delete')->name('todo.delete');


Route::middleware('auth')->group(function(){

    Route::get('/todos', 'App\Http\Controllers\TodoController@index')->name('todo.index');

    Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
    
    Route::get('/todos/{id}', 'App\Http\Controllers\TodoController@edit');
    
    Route::post('/todos/create', 'App\Http\Controllers\TodoController@store');
    
    Route::patch('/todos/{todo}/update', 'App\Http\Controllers\TodoController@update')->name('todo.update');
    
    Route::put('/todos/{todo}/complete', 'App\Http\Controllers\TodoController@complete')->name('todo.complete');
    
    Route::delete('/todos/{todo}/incomplete', 'App\Http\Controllers\TodoController@incomplete')->name('todo.incomplete');
    
    Route::delete('/todos/{todo}/delete', 'App\Http\Controllers\TodoController@delete')->name('todo.delete');

    Route::get('/todos/{todo}/show', 'App\Http\Controllers\TodoController@show')->name('todo.show');
    

});


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

Route::get('/user','App\Http\Controllers\UserController@index');
Auth::routes();

//Route::post('/upload',function(){
    //dd(request()->all());
    //dd(request()->file('image'));
    //dd(request()->hasfile('image'));
   // request()->image->store('images','public');
    //return 'uploded';
//});
Route::post('/upload','App\Http\Controllers\UserController@uploadAvatar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
