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

Route::get('/hello', 'HelloController@index');
Route::get('/hello/add', 'HelloController@insert');
Route::post('/hello/process_add','HelloController@process_add');
Route::get('/hello/{id}', 'HelloController@show');
Route::get('/hello/{id}/edit', 'HelloController@edit');
Route::put('/hello/{id}', 'HelloController@update');
