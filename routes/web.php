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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('index');
Route::get('/view', 'AdminController@create')->name('view');
Route::get('admin/customersupport','CustomerController@index')->name('index');
Route::get('admin/customer-view-message/{id}','CustomerController@view')->name('view');
Route::get('admin/customer-view-message-show/{id}','CustomerController@message')->name('message');
Route::post('admin/send-message-user-admin-member','CustomerController@create')->name('create');
Route::get('admin/complain','CustomerController@complainform')->name('complainform');
Route::post('admin/complain-user-record-detail','CustomerController@complainadd')->name('complainadd');
Route::get('admin/customer-view-message-show-single/{id}','CustomerController@single')->name('single');



