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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/faq', 'FaqController');

Route::resource('/actors', 'ActorController');

/*
Route::get('actors', 'ActorController@index');
Route::post('actors', 'ActorController@store');
Route::get('actors/create', 'ActorController@create');
Route::get('actors/{actor}', 'ActorController@index');
Route::get('actors', 'ActorController@index');
Route::get('actors', 'ActorController@index');
Route::get('actors', 'ActorController@index');
*/
