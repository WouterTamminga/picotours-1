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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/sitemap', 'PagesController@sitemap');

Route::resource('cities', 'CityController');
Route::get('/pages/cityoverview', 'CityController@cityoverview');
Route::get('/pages/citytemplate/{id}', 'CityController@citytemplate');

Route::resource('tourcategories', 'TourCategoryController');

Route::resource('tourtypes', 'TourTypeController');

Route::resource('tours', 'TourController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
