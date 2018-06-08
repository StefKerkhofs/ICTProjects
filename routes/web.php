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
/**
 * Admin page routes
 */
Route::get('/admin/info', 'AdminInfoController@getInfo');
Route::post('/admin/info', 'AdminInfoController@updateInfo');

Route::get('/admin/pdf', 'AdminPDFController@index');
Route::post('/admin/pdf', 'AdminPDFController@updateContent');

Route::get('/admin/study', 'AdminStudyController@getList');
Route::post('/admin/study/addstudy', 'AdminStudyController@addStudy');
Route::post('/admin/study/addmajor', 'AdminStudyController@addMajor');

Route::get('/admin/trip', 'AdminTripController@getTrips');
Route::get('/admin/trip/add/', 'AdminTripController@createTripForm');
Route::get('/admin/trip/{id}', 'AdminTripController@editTripForm');
Route::post('/admin/trip/{id}/edit', 'AdminTripController@editTrip');
Route::post('/admin/trip/add/', 'AdminTripController@createTrip');

Route::get('/admin/trip/edit', 'AdminTripController@editTripForm');
Route::get('/admin/trip/edit/{trip_id?}', 'AdminTripController@editTripForm');
Route::post('/admin/trip/update/', 'AdminTripController@editTrip');
Route::post('/admin/trip/insert/', 'AdminTripController@createTrip');

Route::get('/admin/zip', 'AdminZipController@index');
Route::get('/admin/zip/add', 'AdminZipController@addZipForm');
Route::post('/admin/zip/add', 'AdminZipController@addZip');
Route::get('/admin/zip/{id}', 'AdminZipController@editZipForm');
Route::post('/admin/zip/{id}/edit', 'AdminZipController@editZip');

Route::get('/admin/contact', 'AdminContactController@showContact');
Route::post('/admin/contact', 'AdminContactController@updateContact');

/**
 * Front-end Routes
 */
Route::get('/reg', 'RegisterController@form1');
route::post('/reg/form1POST', 'RegisterController@form1POST');
route::get('/reg/form1', 'RegisterController@form1');
route::post('/reg/form2POST', 'RegisterController@form2POST');
route::get('/reg/form2', 'RegisterController@form2');
route::post('/reg/form3POST', 'RegisterController@form3POST');
route::get('/reg/form3', 'RegisterController@form3');
route::post('/reg/form4POST', 'RegisterController@form4POST');
route::get('/reg/form4', 'RegisterController@form4');
route::post('/reg/form5POST', 'RegisterController@form5POST');
route::get('/reg/form5', 'RegisterController@form5');
route::get('/reg/form6GET', 'RegisterController@form6GET');
route::get('/reg/form6', 'RegisterController@form6');
route::get('/reg/form7', 'RegisterController@form7');
/*
 * HomeController
 */
Route::get('/logInUser', 'HomeController@create');
Route::post('/logInUser', 'HomeController@store');
Route::get('/logoutUser', 'HomeController@destroy');
Auth::routes();
Route::get('/home', 'HomeController@index');
/*
 * ProfileController
 */
Route::get('/profile', 'ProfileController@profile');
Route::get('/profileEdit', 'ProfileController@profileEdit');
Route::post('/profileEdit/{user_id}', 'ProfileController@profileUpdate');
/*
 * EditTravellerController
 */
Route::get('/searchTravellers', 'EditTravellerController@searchTravellers');
Route::get('/search','EditTravellerController@search');
Route::get('/editTraveller/{user_id}', 'EditTravellerController@editTraveller');
Route::post('/editTraveller/{user_id}', 'EditTravellerController@updateTraveller');
/*
 * FilterController
 */
Route::get('/filter', 'FilterController@getFilteredTraveller');
route::post('/filter', 'FilterController@getFilteredTraveller');
/*
 *
 */
Route::get('/{page}', 'GuestPagesController@showPage');