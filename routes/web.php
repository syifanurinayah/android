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
Route::get('/home', 'PagesController@index')->middleware('auth');

Route::get('category', 'CategoryController@index')->middleware('auth');
Route::get('category/create', 'CategoryController@create')->middleware('auth');
Route::post('category', 'CategoryController@store')->middleware('auth');
Route::get('category/{category}/edit','CategoryController@edit')->middleware('auth');
Route::patch('category/{category}','CategoryController@update')->middleware('auth');
Route::delete('category/{category}','CategoryController@destroy')->middleware('auth');

Route::get('blood', 'BloodController@index')->middleware('auth');
Route::get('blood/create', 'BloodController@create')->middleware('auth');
Route::post('blood', 'BloodController@store')->middleware('auth');
Route::get('blood/{blood}/edit','BloodController@edit')->middleware('auth');
Route::patch('blood/{blood}','BloodController@update')->middleware('auth');
Route::delete('blood/{blood}','BloodController@destroy')->middleware('auth');

Route::get('users', 'UsersController@index')->middleware('auth');
Route::get('users/create', 'UsersController@create')->middleware('auth');
Route::post('users', 'UsersController@store')->middleware('auth');
Route::get('users/{users}/edit','UsersController@edit')->middleware('auth');
Route::patch('users/{users}','UsersController@update')->middleware('auth');
Route::delete('users/{users}','UsersController@destroy')->middleware('auth');


