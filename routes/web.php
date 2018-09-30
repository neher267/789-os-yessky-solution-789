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

Route::group(['prefix'=>'dashboard', 'namespace'=>'Dashboard'], function() {
	Route::get('/', 'HomeController@index');
	Route::get('contact-us', 'HomeController@contact');
	Route::get('permit-request/{status}', 'HomeController@request_status');
	Route::resource('payments', 'PaymentController');
	Route::resource('landing-requests', 'LandingRequestController');
	Route::resource('overfly-requests', 'OverFlyRequestController');
	Route::resource('profile', 'ProfileController');




	// Route::get('users', 'UserManagementController@index')->name('users');
	// Route::get('users/{user}/edit', 'UserManagementController@edit_role')->name('users.edit.role');
	// Route::get('users/{user}', 'UserManagementController@show')->name('users.show');
	// Route::get('profile', 'ProfileController@show')->name('user.profile');
	// Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
	// Route::get('profile/settings', 'ProfileController@settings')->name('profile.settings');
	// Route::POST('profile/settings/change-password', 'ProfileController@changePassword')->name('profile.settings.pass.change');
	// Route::PUT('profile/{user}/update', 'ProfileController@update')->name('profile.update');
	// Route::PUT('users/{user}', 'UserManagementController@update_role')->name('users.update.role');
	// Route::DELETE('users/{user}', 'UserManagementController@destroy')->name('users.destroy');
	//end training
});

