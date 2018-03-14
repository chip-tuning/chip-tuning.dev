<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home.index');
Route::group(['prefix' => 'usluge', 'as' => 'services.',], function() {
	Route::get('automobili', 'ServiceController@cars')->name('cars');
	Route::get('kamioni', 'ServiceController@trucks')->name('trucks');
	Route::get('poljoprivredne-masine', 'ServiceController@machines')->name('machines');
	Route::get('dpf-off', 'ServiceController@dpf')->name('dpf');
	Route::get('egr-off', 'ServiceController@egr')->name('egr');
	Route::get('dtc-off', 'ServiceController@dtc')->name('dtc');
	Route::get('ad-blue-off', 'ServiceController@adblue')->name('adblue');
	Route::get('swirl-flaps-off', 'ServiceController@swirlflaps')->name('swirlflaps');
	Route::get('speed-limit-off', 'ServiceController@speedlimit')->name('speedlimit');
	Route::get('hot-start-fix', 'ServiceController@hotstart')->name('hotstart');
	Route::get('gps-pracenje', 'ServiceController@gps')->name('gps');
	Route::get('dijagnostika', 'ServiceController@diagnostics')->name('diagnostics');
});
Route::get('blog', 'ArticleController@index')->name('blog.index');
Route::get('blog/pretraga', 'ArticleController@search')->name('blog.search');
Route::get('blog/tagovi', 'ArticleController@tags')->name('blog.tags');
Route::get('blog/arhiva', 'ArticleController@archive')->name('blog.archive');
Route::get('blog/{article}', 'ArticleController@show')->name('blog.show');
Route::get('nasi-radovi', 'GalleryController@index')->name('gallery.index');
Route::get('kontakt', 'ContactController@index')->name('contact.index');
Route::post('kontakt', 'ContactController@store')->name('contact.store');
Route::get('cesta-pitanja', 'FaqController@index')->name('faq.index');
Route::post('cesta-pitanja', 'FaqController@store')->name('faq.store');
Route::get('uslovi-koriscenja', 'TermsOfUseController@index')->name('terms.index');
Route::get('politika-privatnosti', 'PrivacyPolicyController@index')->name('privacy.index');

Route::resource('email/price', 'PriceController', ['only' => [
    'index', 'store'
]]);

Route::group(['prefix' => 'subscription', 'as' => 'subscription.',], function() {
	Route::post('subscribe', 'SubscriberController@store')->name('store');
	Route::get('confirm/{subscriber}', 'SubscriberController@edit')->name('edit');
	Route::get('unsubscribe/{subscriber}', 'SubscriberController@destroy')->name('destroy');
});

// Feeds
Route::group(['prefix' => 'feed', 'as' => 'feed.',], function() {
	Route::get('atom', 'FeedController@atom')->name('atom');
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'as' => 'admin.',], function() {
	
	Route::group(['prefix' => 'api', 'namespace' => 'Api',], function() {
		Route::post('dropzone', 'DropzoneController@store')->name('api.dropzone.store');
		Route::delete('dropzone/{picture} ', 'DropzoneController@destroy')->name('api.dropzone.destroy');
		Route::get('tags', 'TagController@index')->name('api.tags.index');
		Route::get('tags/edit', 'TagController@edit')->name('api.tags.edit');
	});
	
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
	Route::resource('tags', 'TagController');
	Route::resource('articles', 'ArticleController');
	Route::resource('photos', 'PhotoController');
	Route::resource('testimonials', 'TestimonialController');
	Route::resource('faqs', 'FaqController');

	// Registration Routes
	//Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
	//Route::post('register', 'RegisterController@register');
});