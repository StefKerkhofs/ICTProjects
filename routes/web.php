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

/**
 *  Front end pages
 */

Route::get('/', function () {
    return view('user.info.info');
});

Route::get('/reg', 'RegisterController@form1');
route::get('/reg/form1', 'RegisterController@form1');
route::post('/reg/form2', 'RegisterController@form2');
route::post('/reg/form3', 'RegisterController@form3');
route::post('/reg/form4', 'RegisterController@form4');
route::post('/reg/form5', 'RegisterController@form5');
route::post('/reg/form6', 'RegisterController@form6');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@profile');
Route::get('/profileEdit', 'ProfileController@profileEdit');
Route::get('/searchStudentEdit', 'ProfileController@searchStudentEdit');
Route::get('/editSearchedStudent', 'ProfileController@editSearchedStudent');

Route::get('/filter', 'FilterController@index');
route::post('/filter/getTravelers', 'FilterController@getFilteredTraveller');

Route::get('/{page}', 'GuestPagesController@showPage');

