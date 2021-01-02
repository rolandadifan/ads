<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/ad', 'Api\AdController@create');
Route::get('/ad', 'Api\AdController@index');
Route::get('/all', 'Api\AdController@getAll');
Route::get('/myads', 'Api\AdController@myads');
Route::get('/ad/{id}', 'Api\AdController@show');
Route::delete('/ad/{id}', 'Api\AdController@destroy');
Route::put('/ad/{id}', 'Api\AdController@update');


Route::get('/category', 'Api\CategoryController@index');

Route::post('/message', 'Api\MessageController@create');

Route::get('/about', 'Api\AboutController@index');
