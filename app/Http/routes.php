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

Route::get('/', 'WelcomeController@index');
//Route::post('welcomes','WelcomeController@storeContact');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/** Skill information route resources **/
Route::get('skills/{skills}/delete', 'SkillInformationController@delete');
Route::resource('skills', 'SkillInformationController');

/** Project route resource */
Route::get('projects/{projects}/delete', 'ProjectController@delete');
Route::resource('projects', 'ProjectController');

/** Contact route resource */
Route::resource('contacts', 'ContactController');
