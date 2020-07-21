<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('nyumbani.mwanzo');
});
*/

Route::get('/', 'frontEndController@mwanzo')->name('mwanzo');
Route::get('/movies', 'frontEndController@movies')->name('movies');
Route::get('/movies/movie-details/{id}', 'frontEndController@movie_details')->name('movie-details');
Route::get('/admin', 'frontEndController@adminDashboard')->name('adminDashboard');

Route::get('/admin/movies', 'adminMovieController@index')->name('home-movies');
Route::post('/admin/movie/store', 'adminMovieController@store')->name('store-movie');
Route::get('/admin/movie/create', 'adminMovieController@create')->name('create-movie');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


