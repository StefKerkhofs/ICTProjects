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

/*
 * RegisterController
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
route::get('/reg/form5', 'RegisterController@form3');

route::post('/reg/form6POST', 'RegisterController@form6POST');
route::get('/reg/form6', 'RegisterController@form3');


Auth::routes();

Route::get('/home', 'HomeController@index');
/*
 * ProfileController
 */
Route::get('/profile', 'ProfileController@profile');
Route::get('/profileEdit', 'ProfileController@profileEdit');
/*
 * EditTravellerController
 */
Route::get('/searchTraveller', 'EditTravellerController@searchTraveller');
Route::get('/editTraveller/{user_id}', 'EditTravellerController@editTraveller');

Route::get('/filter', 'FilterController@getFilteredTraveller');
route::post('/filter', 'FilterController@getFilteredTraveller');

Route::get('/{page}', 'GuestPagesController@showPage');

