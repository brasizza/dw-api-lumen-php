<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => '/user'], function () use ($router) {
$router->post('/', 'UserController@register');
$router->post('/auth', 'UserController@login');
});



$router->group(['prefix' => '/order'], function () use ($router) {
    $router->get('/user/{id}', 'UserController@findOrders');
    $router->post('/', 'PedidoController@order');
    });


    $router->get('/menu', 'CardapioController@findAll');
