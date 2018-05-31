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

