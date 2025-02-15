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
// Route::resource('events','EventsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search','SearchController');

//Multi-step form
Route::get('/events/create-step1', 'EventsController@createStep1');
Route::post('/events/create-step1', 'EventsController@postCreateStep1');
Route::get('/events/create-step2', 'EventsController@createStep2');
Route::post('/events/create-step2', 'EventsController@postCreateStep2');
Route::get('/events/create-step2back', 'EventsController@createStep2');
Route::post('/events/create-step2back', 'EventsController@postCreateStep2back');
Route::get('/events/create-step3back', 'EventsController@createStep3');
Route::post('/events/create-step3back', 'EventsController@postCreateStep3back');
Route::get('/events/create-step3', 'EventsController@createStep3');
Route::post('/events/store', 'EventsController@store');
