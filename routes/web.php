<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api'], function($app) {
    $app->get('login/', 'UserController@authenticate');
    $app->get('todo/', 'TodoController@index');
    $app->get('todo/{id}/', 'TodoController@show');
    $app->post('todo/', 'TodoController@store');
    $app->put('todo/{id}/', 'TodoController@update');
    $app->delete('todo/{id}', 'TodoController@destroy');

});