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
    $router->resource('articles', ArticleController::class);
    $router->resource('post-types', PostTypeController::class);
    // $router->post('/', 'ArticleController@store');
});

// Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
