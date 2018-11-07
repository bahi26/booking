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
session_start();
Route::get('/', 'bookingController@book');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'userController@view')->name('home');
Route::post('/profile', 'userController@view')->name('home');

Route::get('/createQuestionnaire/{id}','questionnaireController@create');
Route::post('/createQuestionnaire/{id}','questionnaireController@create');

Route::get('/book','bookingController@book');

Route::post('/book','bookingController@book');

Route::get('/complete/{day}','bookingController@complete');
Route::get('/price/{id}','bookingController@price');

Route::post('/complete/{day}','bookingController@complete');


Route::get('/calendar','bookingController@calendar');


Route::get('/viewRooms','RoomController@view');
Route::get('/createRoom','RoomController@create');
Route::post('/createRoom','RoomController@create');

Route::get('/viewEmployee','EmployeeController@view');
Route::get('/createEmployee','EmployeeController@create');
Route::post('/createEmployee','EmployeeController@create');

Route::get('/viewExercise','ExerciseController@view');
Route::get('/viewExercise/{id}','ExerciseController@show');
Route::get('/createExercise','ExerciseController@create');
Route::get('/deleteExercise/{id}','ExerciseController@destroy');
Route::post('/createExercise','ExerciseController@create');
Route::get('/assign',['as'=>'assign','uses'=>'ExerciseController@get_users']);
Route::post('/assign','ExerciseController@assign');
Route::get('/editExercise/{id}','ExerciseController@edit');
Route::post('/editExercise/{id}',['as'=>'editExercise','uses'=>'ExerciseController@update']);

Route::get('/viewReport',['as'=>'report','uses'=>'reportController@allExercise']);
Route::get('/viewReport/{id}','reportController@dailyExercise');

Route::get('/viewExtras','ExtraController@view');
Route::get('/createExtra','ExtraController@create');
Route::post('/createExtra','ExtraController@create');

Route::get('/viewSupplier','SupplierController@view');
Route::get('/createSupplier','SupplierController@create');
Route::post('/createSupplier','SupplierController@create');

Route::get('/viewMaintenance','MaintenanceController@view');
Route::get('/createMaintenance','MaintenanceController@create');
Route::post('/createMaintenance','MaintenanceController@create');

Route::get('/viewCobon','CobonController@view');
Route::get('/createCobon','CobonController@create');
Route::post('/createCobon','CobonController@create');

Route::get('/deleteCobon/{id}','CobonController@delete');
Route::get('/updateCobon/{id}','CobonController@update');
Route::post('/updateCobon/{id}','CobonController@update');

Route::get('/viewPoints','PointsController@view');
Route::get('/createPoints','PointsController@create');
Route::post('/createPoints','PointsController@create');

Route::get('/updatePoints/{id}','PointsController@update');
Route::post('/updatePoints/{id}','PointsController@update');
Route::get('/deletePoints/{id}','PointsController@delete');

Route::get('/detailsCobon/{id}','CobonController@details');
Route::get('/detailsPoints/{id}','PointsController@details');

Route::get('/updateRoom{id}','RoomController@update');
Route::post('/updateRoom/{id}','RoomController@update');

Route::get('/deleteRoom/{id}','RoomController@delete');