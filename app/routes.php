<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/game', 'HomeController@showGame');

Route::controller('about', 'AboutController');

Route::resource('posts', 'PostsController');

Route::get('test404', function()
{
    Log::info('This is useful');
    Log::warning('Something went wrong');
    Log::error('Something went really wrong');

    App::abort(404);
});

# Login Routes
Route::get('login','HomeController@login');
Route::post('login','HomeController@doLogin');
Route::get('logout','HomeController@logout');
