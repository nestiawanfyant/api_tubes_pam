<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\webScrapingController;

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

// $router->get('/webScraping', 'webScrapingController@index');

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});

$router->get('api/barang/get', 'BarangController@get');
$router->post('api/barang/post', 'BarangController@post');

$router->get('api/kendaraan/get', 'KendaraanController@get');
$router->post('api/kendaraan/post', 'KendaraanController@post');

$router->get('api/perhiasan/get', 'PerhiasanController@get');
$router->post('api/perhiasan/post', 'PerhiasanController@post');

$router->get('api/rumah/get', 'RumahController@get');
$router->post('api/rumah/post', 'RumahController@post');
