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



	

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//disciples
Route::get('/disciples', 'DiscipleController@index');
Route::get('/add-disciple', 'DiscipleController@createView');
Route::post('/add-disciple', 'DiscipleController@create');
Route::post('/delete-disciple', 'DiscipleController@delete');
Route::get('/view-disciple/{id}', 'DiscipleController@view');

//connections
Route::get('/connections', 'ConnectionController@index');