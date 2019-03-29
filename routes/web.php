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

//Multi-step form
Route::get('/create/step1', 'EventsController@createStep1');
Route::post('/create/step1', 'EventsController@postCreateStep1');
Route::get('/create/step2', 'EventsController@createStep2');
Route::post('/create/step2', 'EventsController@postCreateStep2');
Route::get('/create/step3', 'EventsController@createStep3');
Route::post('/create/step3', 'EventsController@postCreateStep3');
