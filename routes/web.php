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

/**
 *  Front end pages
 */

Route::get('/template', function () {
    return view('user.templates.templateFrontEnd');
});
Route::get('/reg', 'RegisterController@returnv');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@profile');
Route::get('/searchStudentEdit', 'ProfileController@searchStudentEdit');
Route::get('/{page}', 'GuestPagesController@showPage');
Route::get('/profileEdit', 'ProfileController@profileEdit');
Route::get('/searchStudentEdit', 'ProfileController@searchStudentEdit');
Route::get('/{page}', 'GuestPagesController@showPage');
