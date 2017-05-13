<?php

use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app(Router::class);

$api->version('v1',function($api) {
    $api->group(['namespace'=>'App\Http\Api\v1\Controllers'],function($api) {
        //$api->resource('/user', 'OCUserController', ['only' => ['index', 'show']]);
        //$api->resource('/societe', 'OCSocieteController', ['only' => ['index', 'show']]);

        $api->group(['middleware' => 'auth_client'], function ($api) {
            // Endpoints registered needs X_HTTP_COMPANY_DATABASE
            $api->resource('/client', 'OCClientController', ['only' => ['index', 'show']]);
            $api->resource('/contact', 'OCContactController', ['only' => ['index', 'show']]);
            $api->resource('/devis', 'OCDevisController', ['only' => ['index', 'show']]);
            $api->resource('/commande', 'OCCommandeClientController', ['only' => ['index', 'show']]);
            $api->resource('/affaire', 'OCAffaireController', ['only' => ['index', 'show']]);
        });
    });
});