<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('blog', 'ArticleController@index')->name('blog.index');
Route::get('blog/{article}', 'ArticleController@show')->name('blog.show');
Route::get('nasi-radovi', 'GalleryController@index')->name('gallery.index');
Route::get('kontakt', 'ContactController@index')->name('contact.index');
Route::get('cesta-pitanja', 'FaqController@index')->name('faq.index');
Route::get('uslovi-koriscenja', 'TermsOfUseController@index')->name('terms.index');
Route::get('politika-privatnosti', 'PrivacyPolicyController@index')->name('privacy.index');

// Feeds
Route::group(['prefix' => 'feed', 'as' => 'feed.',], function() {
	Route::get('rss', 'FeedController@rss')->name('rss');
	Route::get('json', 'FeedController@json')->name('json');
});

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');	

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Admin\RegisterController@register');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'as' => 'admin.',], function() {

	Route::group(['prefix' => 'api', 'namespace' => 'Api',], function() {
		Route::post('dropzone', 'DropzoneController@store')->name('api.dropzone.store');
		Route::delete('dropzone/{picture} ', 'DropzoneController@destroy')->name('api.dropzone.destroy');
		Route::get('tags', 'TagController@index')->name('api.tags.index');
		Route::post('files', 'FileController@store')->name('api.file.store');
	});
	
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
	Route::resource('article', 'ArticleController');
	Route::resource('faq', 'FaqController');
	Route::resource('gallery', 'GalleryController');
	Route::resource('tag', 'TagController');

	// Registration Routes
	//Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
	//Route::post('register', 'RegisterController@register');
});