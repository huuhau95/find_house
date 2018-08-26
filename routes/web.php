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

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', 'userController@home');

Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@postRegister');
Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');
Route::get('/location', 'userController@location');
Route::get('/location/{idpro}/{id}', 'userController@local');
Route::get('/local/{id}', 'userController@loadLocal');
Route::get('/detailLocation/{id}', 'userController@detail');
Route::get('/tourGuide', 'userController@tourGui');
Route::get('/bookTour/{id}', 'BookingController@pageBook');

Route::get('/test', 'AdminController@getUpload');
Route::post('/test', 'AdminController@postUpload');
Route::post('/showListKH', 'BookingController@showListGuest');
Route::post('/order', 'BookingController@create');

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function()
{
    Route::get('/', 'HomeController@index');
    Route::get('/user', 'UserController@index');
    Route::get('/tour', 'TourController@show');
    Route::get('/rate', 'RateController@showRate');
    Route::get('/location', 'LocationController@showLocation');
    Route::get('/plan', 'PlanController@showPlan');
    Route::get('/showprovince', 'ProvinceController@showProvines');
    Route::get('/province', 'ProvinceController@showProvine');
    Route::post('/province', 'ProvinceController@addProvine');
    Route::get('/delProvince/{id}', 'ProvinceController@delProvine');
    Route::get('/addRate', 'RateController@rate');
    Route::post('/addRate', 'RateController@addRate');
    Route::get('/addTour', 'TourController@tour');
    Route::post('/addTour', 'TourController@addTour');
    Route::get('/editTour/{id}', 'TourController@edit');
    Route::post('/editTour/{id}', 'TourController@editTour');
    Route::get('/addLocation', 'LocationController@location');
    Route::post('/addLocation', 'LocationController@addLocation');
});
