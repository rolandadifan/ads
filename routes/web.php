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
Route::resource('user', 'UserController');

// Admin Route
Route::middleware('role:admin')->get('/admin/dashboard', 'HomeadminController@index')->name('dashboard');
Route::resource('ads', 'AdsController')->middleware('role:admin');
Route::resource('user', 'UserController')->middleware('role:admin');
Route::resource('adminlist', 'AdminController')->middleware('role:admin');
Route::resource('pending', 'PendingController')->middleware('role:admin');
Route::resource('active', 'ActiveController')->middleware('role:admin');
Route::resource('category', 'CategoryController')->middleware('role:admin');
Route::resource('message', 'MessageController')->middleware('role:admin');
Route::resource('about', 'AboutController')->middleware('role:admin');
Route::resource('setting', 'SettingController')->middleware('role:admin');
Route::resource('profile/admin', 'ProfileadminController')->middleware('role:admin');
Route::get('pending/status/{id}', 'PendingController@Status');
Route::get('active/status/{id}', 'ActiveController@Status');
