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
Route::get('/disciple/edit/{id}', 'DiscipleController@editView');
Route::post('/disciple/edit/{id}', 'DiscipleController@edit');

//connections
Route::get('/connections', 'ConnectionController@index');
Route::post('/connections', 'ConnectionController@view');
Route::get('/connections/{id}', 'ConnectionController@view2');
Route::get('/connections/edit/{id}', 'ConnectionController@edit');
Route::get('/connections/add/{id}', 'ConnectionController@createView');
Route::post('/connections/add/{id}', 'ConnectionController@create');
Route::post('/delete-connection', 'ConnectionController@delete');

//batch
Route::get('/batch', 'BatchController@index');
Route::get('/add-batch', 'BatchController@createView');
Route::post('/add-batch', 'BatchController@create');
Route::post('/delete-batch', 'BatchController@delete');
Route::get('/batch/edit/{id}', 'BatchController@editView');
Route::post('/batch/edit/{id}', 'BatchController@edit');