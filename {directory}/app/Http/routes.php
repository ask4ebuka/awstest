<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

*/
Route::get('/',['as' => 'home', function () {
    return view('home', ['title' => 'Attendace Home']);
}]);
Route::get('home',['as' => 'home', function () {
    return view('home',['title' => 'Attendace Home']);
}]);
Route::get('About',['as' => 'About', function () {
    return view('About', ['title' => 'Attendace About page']);
}]);
Route::get('Services',['as' => 'Services', function () {
    return view('Services', ['title' => 'Attendace Services page']);
}]);
Route::get('Contact',['as' => 'Contact', function () {
    return view('Contact', ['title' => 'Attendace Contact page']);
}]);
Route::get('Free Text',['as' => 'Free Text',function () {
    return view('Free Text', ['title' => 'Attendace Free Text']);
}]);
