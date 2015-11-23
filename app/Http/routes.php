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

use Illuminate\Support\Facades\Route;

get('/', 'WelcomeController@index');
get('index', 'WelcomeController@index');
get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    'about' => 'AboutController',
    'team' => 'TeamController',
    'user' => 'UserController',
    'subscribes' => 'SubscribeController',
	'image' => 'ImageController'
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

// Photos page
get('photos/{id}', 'ImageController@show')->where('id', '[0-9]+'); // using regular expression, filtered it first hand, whether it's a natural number or not
get('photos', 'ImageController@getIndex');
get('photos/upload', ['middleware' => 'auth', 'uses' => 'ImageController@create']);
post('photos/upload', ['middleware' => 'auth', 'uses' => 'ImageController@store']);
get('photos/{id}/delete', ['middleware' => 'auth', 'uses' => 'ImageController@destroy'])->where('id', '[0-9]+');
