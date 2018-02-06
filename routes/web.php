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

// Web application routes
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/nasi-radovi', 'GalleryController@index')->name('gallery.index');
Route::get('/kontakt', 'ContactController@index')->name('contact.index');

//Auth::routes();

