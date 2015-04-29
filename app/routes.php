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

// Route::get('/', function()
// {
//     return View::make('hello');
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return Redirect::to('/');
//     } else {
//         $data = array('name' => $name,
//                         'another' => 'some other stuff');
//         return View::make('my-first-view')->with($data);
//     }
// });


// Route::get('/rolldice/{guess}', function($guess)
// {
// $data = ['guess' => $guess];
// return View::make('roll-dice')->with($data);
// });





Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');




// Route::get('/sayhello/{name}', function()
// {
//     return View::make('my-first-view');
// });


// Route::get('resume', function()
// {
//     return 'This is my Resume';
// });


// Route::get('portfolio', function()
// {
//     return 'This is my Portfolio';
// });
