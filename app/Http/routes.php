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

Route::bind('providers', function($slug)
{
    return App\Provider::whereSlug($slug)->first();
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');


Route::get('/{profile}', 'ProfileController@show');
Route::get('/{profile}/edit', 'ProfileController@edit');


$router->resource('providers', 'ProvidersController');

$router->resource('reviews', 'ReviewsController');