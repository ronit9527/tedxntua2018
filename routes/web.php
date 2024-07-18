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

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
], function () {
	Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
	Route::get('/about', ['as' => 'about', 'uses' => 'AboutController@index']);
	Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@index']);
	Route::post('/contact', ['as' => 'contact', 'uses' => 'ContactController@submit']);
	Route::get('/sponsors', ['as' => 'sponsors', 'uses' => 'SponsorsController@index']);
	Route::get('/schedule', ['as' => 'schedule', 'uses' => 'ScheduleController@index']);
	Route::get('/team', ['as' => 'team', 'uses' => 'TeamController@index']);
	Route::get('/speakers', ['as' => 'speakers', 'uses' => 'SpeakersController@index']);
	Route::get('/speakers/{sid}', ['as' => 'speakers', 'uses' => 'SpeakersController@speaker']);
	Route::get('/license', ['as' => 'license', 'uses' => 'LicenseController@index']);
	Route::get('/privacy', ['as' => 'privacy', 'uses' => 'PrivacyController@index']);
	Route::get('/tickets', ['as' => 'tickets', 'uses' => 'TicketsController@index']);
	Route::get('/currentEvent', ['as' => 'currentEvent', 'uses' => 'CurrentEventController@index']);
});
