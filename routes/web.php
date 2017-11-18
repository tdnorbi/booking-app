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

//List Accommodations
Route::get('/accommodations', 'AccommodationController@index');

//Rooms
Route::get('/rooms', 'RoomController@index');

// List Bookings
//Route::get('/bookings', 'BookingController@index');
Route::resource('bookings','BookingController');

Route::get('/demo', function () {
    return view('demo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


