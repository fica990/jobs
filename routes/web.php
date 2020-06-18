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

Route::get('/job-offers', 'JobOfferController@index')->name('job-offers.index');
Route::post('/job-offers', 'JobOfferController@store')->name('job-offers.store');

Route::get('/job-offers/create', 'JobOfferController@create')->name('job-offers.create');

Route::get('/job-offers/{id}/{status}', 'JobOfferController@manage')->name('job-offers.manage');
