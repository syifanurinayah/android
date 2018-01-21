<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'Api\AuthController@register');
Route::post('auth/login', 'Api\AuthController@login');
Route::get('users', 'Api\UserController@users');
Route::get('category', 'Api\CategoryController@category');
Route::get('category/{id}', 'Api\CategoryController@categoryById');
Route::get('users/profile', 'Api\UserController@profile');
Route::get('users/{id}', 'Api\UserController@profileById');
Route::post('post', 'Api\PostController@add');
Route::put('post/{post}', 'Api\PostController@update');
Route::delete('post/{post}', 'Api\PostController@delete');
Route::post('blood', 'Api\BloodController@add');
Route::put('blood/{blood}', 'Api\BloodController@update');
Route::delete('blood/{blood}', 'Api\BloodController@delete');