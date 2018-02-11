<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('blog', 'ArticleController@index')->name('blog.index');
Route::get('blog/post', 'ArticleController@show')->name('blog.show');
Route::get('nasi-radovi', 'GalleryController@index')->name('gallery.index');
Route::get('kontakt', 'ContactController@index')->name('contact.index');
Route::get('cesta-pitanja', 'FaqController@index')->name('faq.index');
Route::get('uslovi-koriscenja', 'TermsOfUseController@index')->name('terms.index');
Route::get('politika-privatnosti', 'PrivacyPolicyController@index')->name('privacy.index');

//Auth::routes();