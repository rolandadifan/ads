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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::middleware('role:admin')->get('/admin/dashboard', 'HomeadminController@index')->name('dashboard');
Route::resource('ads', 'AdsController');
Route::resource('user', 'UserController');
Route::resource('admin', 'AdminController');
Route::resource('pending', 'PendingController');
Route::resource('active', 'ActiveController');
Route::resource('category', 'CategoryController');
Route::resource('message', 'MessageController');
Route::resource('about', 'AboutController');
Route::resource('setting', 'SettingController');
Route::get('pending/status/{id}', 'PendingController@Status');
Route::get('active/status/{id}', 'ActiveController@Status');
