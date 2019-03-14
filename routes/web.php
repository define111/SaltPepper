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

Route::get('/', 'PagesController@landing');
Route::get('/eventmanagers', 'PagesController@eventmanagers');
Route::get('/locations', 'PagesController@locations');
Route::get('/providers', 'PagesController@providers');
Route::get('/customers', 'PagesController@customers');
Route::resource('events','EventsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search','SearchController');
