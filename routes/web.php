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


route::get('/','PaginasController@inicio');
route::get('/crear','PaginasController@create');
route::get('/articulos','PaginasController@store');
route::get('/mostrar','PaginasController@show');
route::get('/contacto','PaginasController@contactar');
route::get('/galeria','PaginasController@galeria');




