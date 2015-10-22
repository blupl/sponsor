<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/sponsor', 'sponsor', ['namespace' => 'Blupl\Sponsor\Http\Controllers'], function (Router $router) {

        $router->get('create', 'SponsorController@create');
});

/*
|--------------------------------------------------------------------------
| Backend Routing
|--------------------------------------------------------------------------
*/

Foundation::namespaced('Blupl\Sponsor\Http\Controllers\Admin', function (Router $router) {
    $router->group(['prefix' => 'sponsor'], function (Router $router) {
        $router->get('/', 'HomeController@index');
        $router->match(['GET', 'HEAD', 'DELETE'], 'profile/{roles}/delete', 'HomeController@delete');

    });
});
