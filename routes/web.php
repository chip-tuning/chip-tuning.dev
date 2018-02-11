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

Route::group(['prefix' => 'admin'], function() {

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

	Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function() {
		
		// Protected pages
		Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');
		
		// Registration Routes
		//Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
		//Route::post('register', 'RegisterController@register');
	});
});