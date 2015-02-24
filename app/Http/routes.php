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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    'about' => 'AboutController',
    'team' => 'TeamController',
    'user' => 'UserController',
    'subscribes' => 'SubscribeController',
]);

/** Skill information route resources **/
Route::get('skills/{skills}/delete', 'SkillInformationController@delete');
Route::resource('skills', 'SkillInformationController');

/** Project route resource */
Route::get('projects/{projects}/delete', 'ProjectController@delete');
Route::resource('projects', 'ProjectController');

/** Contact route resource */
Route::get('contacts/{contacts}/delete', 'ContactController@delete');
Route::resource('contacts', 'ContactController');
