<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/users', UserController::class);
    $router->resource('/parameters', ParameterController::class);
    $router->resource('/estate-objects', EstateObjectController::class);
    $router->resource('/convenience', ConvenienceController::class);
    $router->resource('/photos', PhotoController::class);
    $router->get('/add-estate-object', 'AddEstateObjectController@index');
});
