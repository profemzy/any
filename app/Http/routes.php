<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/home', function () {
    return view('pages.main');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('companies_web/{id}', 'CompaniesWebController@create');
Route::post('companies_web/{id}', 'CompaniesWebController@store');


Route::get('categories_web', 'CategoriesWebController@index');
Route::get('categories_web/{id}', 'CategoriesWebController@details');

Route::get('bookings_web', 'BookingsWebController@create');
Route::post('bookings_web', 'BookingsWebController@store');

Route::get('testimonials_web', 'TestimonialsWebController@index');
Route::get('create_testimonial', 'TestimonialsWebController@create');
Route::post('create_testimonial', 'TestimonialsWebController@store');

Route::get('create_profile', 'ProfileWebController@create');
Route::post('create_profile', 'ProfileWebController@store');


//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



// API ROUTES
Route::get('bookings', 'BookingsController@index');
