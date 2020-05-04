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
	// TODO:: report from activity < daily - weekly - monthly - yearly >
	// Home:: only auth user
	Route::get('/', 'HomeController@index')->name('home');
	
	// auth :: login - reset psw.
	Auth::routes(['register' => FALSE]);
	
	// Position
	// TODO:: Documentation and Explications
	Route::resource('position','PositionController')->except(['destroy']);
	
	//TODO:: countries && event(Activity - Report)
	
	//TODO:: data Profile && views && authorize && event(activity - Report).
	Route::resource('office','OfficeController')->except(['destroy']);
	
	/*
	 * data : last first gender birth avatar phone psw email  Post office creator.
	 * Members : list create show update delete restore params psw.
	 */
	Route::resource('user','UserController');
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
