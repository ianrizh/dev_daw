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


Route::get('/', 'PagesController@index');
Route::resource('posts', 'PostsController',['except' => ['show']]);

//New to boss, to yung bagong inadd ko.
Route::get('/posts/{slug}',['as' => 'posts.show', 'uses' => 'ShowController@getSingle']);

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

//Route::get('users/{id}', 'ViewArticleController');
