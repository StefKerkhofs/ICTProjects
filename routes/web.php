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

Route::get('/reg', 'RegisterController@returnv');
Route::get('/nextForm', 'RegisterController@next');
Route::get('/prevForm', 'RegisterController@previous');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@profile');
Route::get('/profileEdit', 'ProfileController@profileEdit');
Route::get('/searchStudentEdit', 'ProfileController@searchStudentEdit');
Route::get('/editSearchedStudent', 'ProfileController@editSearchedStudent');

Route::get('/{page}', 'GuestPagesController@showPage');
