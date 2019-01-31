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

Route::get('user/{id}', 'UserController@showProfile');
Route::get('passport/{id}', 'UserController@showPassport');
Route::get('lesson/{id}', 'UserController@showLesson');

// Insert relation
Route::get('forum/create', 'UserController@createForum');

// update || delete Relational
Route::get('forum/update', 'UserController@updateForum');
Route::get('forum/delete', 'UserController@deleteForum');


Route::get('forum/{id}', 'UserController@showForum');
