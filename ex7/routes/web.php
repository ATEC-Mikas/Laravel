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


Route::get('/', "PostController@index");
Auth::routes();
Route::get('/home', "PostController@index");
Route::resource("/posts", "PostController");
Route::post("/posts/{post}/up", "VoteController@up");
Route::post("/posts/{post}/down", "VoteController@down");

Route::get("/user/{user}", "PostController@user");
Route::get("/ajax/{post}", "PostController@ajax");