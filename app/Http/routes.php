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

Route::get('reviews', function()
{
    $query = Request::get('q');

          if ($query)
          {
              $reviews = Review::where('utility', 'LIKE', "%$query%")->get();
          }
        else
        {
            $reviews = Review::all();
        }

    return View::make('reviews.index')->withReviews($reviews);
});

Route::get('/', 'PagesController@index');

$router->resource('providers', 'ProvidersController');

$router->resource('reviews', 'ReviewsController');