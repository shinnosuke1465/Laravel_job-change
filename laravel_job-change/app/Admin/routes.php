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
    $router->resource('agents', AgentController::class);

    Route::group(['prefix' => 'jobhunting', 'as' => 'jobhunting.'], function() {
        Route::get('/home', 'UserHomeController@index')->name('home');
    });

});
