<?php
	
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Route;
	
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
	
	Auth::routes();
	
	Route::get('/', 'HomeController@index')->name('home');
	
	// TODO:: views && authorize && middleware auth.
	Route::resource('position','PositionController')->except(['destroy']);
	
	//TODO:: data views && authorize && middleware auth.
	Route::resource('office','OfficeController')->except(['destroy']);
	/*
	 * Members : list create show update delete restore params psw.
	 * data : last first gender birth avatar psw email Post phone office creator
	 */
	
	/*
	 * suppliers : list create update delete restore confirmation storage show export import.
	 * data : name address country phone speaker office creator storage %
	 */
	
	/*
	 * brand : list create update delete restore confirmation storage export import.
	 * data: name logo creator supplier storage
	 */
	
	/*
	 * products : list create update delete restore confirmation show export import.
	 * data : name description cost_price ref stock size quantity type parent
	 */
	
	// Notification
	// TodoList
	// search
	// Communication.
