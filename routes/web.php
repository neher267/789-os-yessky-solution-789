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

Route::get('repleace', 'PublicController@repleace');
Route::get('email-test', 'EmailTest@send');

Route::get('/', function () {
    return view('welcome');
});

Route::post('get-operators','AjaxController@get_operators');
Route::post('get-airports','AjaxController@get_airports');



Route::group(['prefix'=>'dashboard', 'namespace'=>'Dashboard', 'middleware'=>['auth']], function() {
	Route::get('/', 'HomeController@index');
	Route::get('contact-us', 'HomeController@contact');
	Route::get('permit-request/{status}', 'HomeController@request_status');
	Route::get('permit-request/{request}/show', 'HomeController@permit_request_show')->name('permit.request.show');
	Route::resource('payments', 'PaymentController');
	Route::resource('landing-requests', 'LandingRequestController');
	Route::resource('overfly-requests', 'OverFlyRequestController');		
	Route::resource('operators', 'OperatorsController');		
	Route::resource('airports', 'AirportsController');		
	Route::resource('countries', 'CountriesController');		
	Route::get('users/customers', 'UserManagementController@customers')->name('users.customers');
	Route::get('users/admens', 'UserManagementController@admens')->name('users.admens');
	Route::get('users/moderators', 'UserManagementController@moderators')->name('users.moderators');



	Route::get('users/{user}/edit', 'UserManagementController@edit_role')->name('users.edit.role');
	// Route::get('users/{user}', 'UserManagementController@show')->name('users.show');
	Route::get('profile', 'ProfileController@show')->name('user.profile');
	// Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
	// Route::get('profile/settings', 'ProfileController@settings')->name('profile.settings');
	// Route::POST('profile/settings/change-password', 'ProfileController@changePassword')->name('profile.settings.pass.change');
	// Route::PUT('profile/{user}/update', 'ProfileController@update')->name('profile.update');
	// Route::PUT('users/{user}', 'UserManagementController@update_role')->name('users.update.role');
	Route::DELETE('users/{user}', 'UserManagementController@destroy')->name('users.destroy');
	//end training

	Route::get('payment', 'PaymentController@create');
});

Route::group(['prefix'=>'dashboard', 'middleware'=>['auth']], function(){
	 // SSLCOMMERZ Start
	Route::POST('pay', 'PublicSslCommerzPaymentController@index');
 	Route::POST('success', 'PublicSslCommerzPaymentController@success');
 	Route::POST('fail', 'PublicSslCommerzPaymentController@fail');
 	Route::POST('cancel', 'PublicSslCommerzPaymentController@cancel');
 	Route::POST('ipn', 'PublicSslCommerzPaymentController@ipn');
	//SSLCOMMERZ END
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

