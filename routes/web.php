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
Route::get('appointment/read', 'AppointmentController@read');
Route::get('search', 'AppointmentController@search')->name('appointment.search');
Route::post('showSession', 'AppointmentController@showSession');
Route::resource('appointment', 'AppointmentController');
Route::get('/', 'PagesController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




