<?php

use App\News;

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
    return view('index')->with("news",News::orderBy("date","desc")->take(1)->get()[0]);
});


Route::get('/news', "NewsController@index");
Route::get("/courses", "CoursesController@index");
Route::get("/contacts", "ContactsController@index");

Route::post("/contacts", "ContactsController@create");

Route::get("/contacts/{id}/edit", "ContactsController@edit");
Route::put('/contacts/{id}','ContactsController@update');
Route::delete("/contacts/{id}","ContactsController@destroy");
Route::get("/contacts/{id}", "ContactsController@show");
Route::get('/courses/{id}', "CoursesController@show");
Route::get('/news/{id}', "NewsController@show");


