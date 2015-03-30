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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'api'], function () {

  Route::resource('comments', 'CommentController',
    ['only' => ['index', 'show', 'store', 'destroy']]
  );

});


/*
 * App::missing(function($exception) { 
 *    return View::make('index'); 
 * });
 * 
 * This way of catching all routes is now deprecated in Laravel 5.0,
 * it has been changed for an exception handler located in App/Exceptions
 * and called Handler.
 *
 * In order to capture all not routed resources is needed to add the lines below, into the *render* method:
 *
 * if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException)
 *     return response(view('index'), 200);
 *
 * Go to app/Exceptions/Handler.php (lines 38-39) to see the result.
 */