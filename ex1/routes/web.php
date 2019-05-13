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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "HomeController@index");
Route::get('/contacto', "ContactosController@index");
Route::post('/contacto/criar', "ContactosController@create");
Route::get('/contacto/resposta', "ContactosController@show");
Route::get('/curso',"CursoController@index");
Route::get('/curso/{id}/inscrever',"CursoController@inscrever");