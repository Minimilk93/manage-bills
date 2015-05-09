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

## Route Model Binding to take the slug from the provider chosen and pull the data according to that slug.
Route::bind('providers', function($slug)
{
    return App\Provider::whereSlug($slug)->first();
});

## Auth routes that come with the general Laravel package.
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

## General pages which are available on the website home, advice etc.
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/advice', 'PagesController@advice');
## Using route resources for providers which provides a list of routes suitable.
$router->resource('providers', 'ProvidersController');

## Using route resources for reviews which provideRs a list of reviews suitable.
$router->resource('reviews', 'ReviewsController');

## Profile routes which direct to the user profile using the username of the user that is logged in.
$router->resource('profile', 'ProfileController');

Route::get('/profile/{profile}/bills', 'BillsController@index');
Route::get('/profile/{profile}/add-bills', 'BillsController@show');