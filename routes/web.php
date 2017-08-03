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
Route::get('/disciple/add', 'DiscipleController@createView');
Route::post('/disciple/add', 'DiscipleController@create');
Route::post('/disciple/delete', 'DiscipleController@delete');
Route::get('/disciple/view/{id}', 'DiscipleController@view');
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

//Batch
Route::get('/batch', 'BatchController@index');
Route::get('/batch/add', 'BatchController@createView');
Route::post('/batch/add', 'BatchController@create');
Route::get('/batch/{id}', 'BatchController@view');
Route::post('/batch/delete', 'BatchController@delete');
Route::get('/batch/edit/{id}', 'BatchController@editView');
Route::post('/batch/edit/{id}', 'BatchController@edit');

//pivot disciple-batch
Route::post('/delete-pivot-disciple-batch', 'PivotDiscipleBatchController@delete');

//Delete Pivot data any in column
Route::post('/pivot/delete', 'PivotDeleteController@delete');
//Events
Route::get('/events', 'EventController@index');

//Sunday Attendance
Route::get('/attendance/sunday-service', 'SundayAttendanceController@index');
Route::get('/attendance/sunday-service/add', 'SundayAttendanceController@createView');
Route::get('/attendance/sunday-service/{id}', 'SundayAttendanceController@view');
Route::get('/attendance/sunday-service/edit/{id}', 'SundayAttendanceController@editView');
Route::post('/attendance/sunday-service/edit/{id}', 'SundayAttendanceController@edit');
Route::post('/attendance/sunday-service/add', 'SundayAttendanceController@create');
Route::post('/attendance/sunday-service/delete', 'SundayAttendanceController@delete');

//Cell Group Attendance
