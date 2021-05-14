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

Route::get('todo_show','App\HTTP\Controllers\TodoController@show');

Route::get('todo_delete/{id}','App\HTTP\Controllers\TodoController@destroy');

Route::get('todo_create','App\HTTP\Controllers\TodoController@create');

Route::post('todo_submit','App\HTTP\Controllers\TodoController@store');

Route::get('todo_edit/{id}','App\HTTP\Controllers\TodoController@edit');

Route::post('todo_update/{id}','App\HTTP\Controllers\TodoController@update')->name('todo.update');
