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

//Route::get('/posts/create','PostsController@create');
//Route::get('/posts/{post}','PostsController@show');
//Route::post('/posts/','PostsController@store');
//
////Route::('posts/{post}/destroy,@PostsController@destroy);
//Route::delete('/posts/{post}','PostsController@destroy');
//
//Route::get('posts/{post}/edit', 'PostsController@edit');
Route::get('/posts/{post}/delete','PostsController@delete');

//Route::patch('posts/{post}','PostsController@update');

Route::resources([
	'categories' => 'CategoriesController',
	'posts' => 'PostsController'
]);



/*
 * [GET] / posts - all entries
 * [GET] /posts/{post} - entry
 * [POST] /posts - create entry
 * [PUT/PATCH] /posts/{post} - update entry
 * [DELETE] /posts/{post} - delete entry
 *
 *
 * */