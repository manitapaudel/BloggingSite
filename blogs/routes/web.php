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


//pages
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');


//posts
Route::resource('posts','PostsController');
//categories
Route::resource('categories','CategoriesController',['except' => ['create']]);
//tags
Route::resource('tags','TagsController',['except' => ['create']]);
//comments
//Route::resource('comments','CommentsController')

Route::post('comments/{post_id}',['uses' => 'CommentsController@store', 'as' =>'comments.store']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
