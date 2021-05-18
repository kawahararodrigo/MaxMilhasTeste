<?php

use Illuminate\Http\Response;

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
    return  response()->json([
        'statusCode' => Response::HTTP_OK,
        'healthy' => 'healthy',
        'service'=> 'api-consumer-correios'
    ], Response::HTTP_OK);
});

$router->group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () use ($router) {
    $router->get('healthy', 'ConsultaEnderecoController@index');
    $router->get('search/{cep}', 'ConsultaEnderecoController@show');
});
