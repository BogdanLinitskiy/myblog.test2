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

Route::get('/','HomeController@home');

Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}','PostsController@show');
Route::post('/posts/','PostsController@store');

Route::get('posts/{id}/edit', 'PostsController@edit');
Route::post('posts/{id}','PostsController@update');

Route::get('/posts/{id}/delete','PostsController@delete');
Route::post('/posts/{id}/destroy','PostsController@destroy');

