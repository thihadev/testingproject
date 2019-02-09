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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index')->name('home');

/**
 * Super admin route
 */
Route::prefix(config('app.admin_prefix'))->group(function () // 'admin'
{
	Auth::routes(['register' => false]);
	Route::middleware(['auth', 'superadmin'])->group(function () {
		Route::get('/', 'Admin\DashboardController@index');
		Route::resource('users', 'Admin\UserController', ['as' => 'admin']);

	});
});

Route::get('/home', 'User\DashboardController@index')->name('frontend.index');

/**
 * User route
 */
// Route::prefix(config('app.user_prefix'))->group(function () // 'admin'
// {
	// Auth::routes();
	// Route::middleware(['auth', 'user'])->group(function () {

	// });
// });

