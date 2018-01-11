<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'Api\AuthController@register');
Route::post('auth/login', 'Api\AuthController@login');
Route::get('users', 'Api\UserController@users');
Route::get('category', 'Api\CategoryController@category')->middleware('auth:api');
Route::get('category/{id}', 'Api\CategoryController@categoryById')->middleware('auth:api');
Route::get('users/profile', 'Api\UserController@profile')->middleware('auth:api');
Route::get('users/{id}', 'Api\UserController@profileById')->middleware('auth:api');
Route::post('post', 'Api\PostController@add')->middleware('auth:api');
Route::put('post/{post}', 'Api\PostController@update')->middleware('auth:api');
Route::delete('post/{post}', 'Api\PostController@delete')->middleware('auth:api');
Route::post('blood', 'Api\BloodController@add')->middleware('auth:api');
Route::put('blood/{blood}', 'Api\BloodController@update')->middleware('auth:api');
Route::delete('blood/{blood}', 'Api\BloodController@delete')->middleware('auth:api');