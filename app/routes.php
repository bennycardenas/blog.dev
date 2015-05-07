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

Route::get('search', 'PostsController');

# Login Routes
Route::get('login','HomeController@login');
Route::post('login','HomeController@doLogin');
Route::get('logout','HomeController@logout');



// Route::get('orm-test', function()
// {
//     $query = Post::with('user');

//     $search = 'qui';

//     $query->where('title', 'like', '%'. $search . '%');
//     $query->orWhere('body' 'like' '%' . $search . '%');

//     $query->orWhereHas('user', function($q){
//         $q->where('username','like','%benny%')
//     });

//     $query->orWhereHas('user', function($q){
//         $q->where('email','like','%benito%')
//     });

//     $post = $query->orderBy('created_at', 'DESC')->paginate(10);

//     dd($post);

// });

