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
/**
 * Admin page routes
 */
Route::get('/admin/info', 'AdminInfoController@getInfo');
Route::post('/admin/info', 'AdminInfoController@updateInfo');



Route::get('/admin/study', 'AdminStudyController@getList');
Route::post('/admin/study', 'AdminStudyController@addStudy');
Route::post('/admin/study', 'AdminStudyController@addMajor');


Route::get('/admin/trip', 'TripController@getTrips');
Route::get('/admin/trip/edit', 'TripController@editTripForm');
Route::get('/admin/trip/edit/{trip_id?}', 'TripController@editTripForm');
Route::post('/admin/trip/update/', 'TripController@editTrip');
Route::post('/admin/trip/insert/', 'TripController@createTrip');