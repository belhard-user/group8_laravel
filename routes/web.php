<?php

Route::group(['prefix' => 'auto'], function($router){
    
    Route::group(['middleware' => ['auth', 'admin']], function($router){
        $router->get('add-brands', ['uses' => 'TestCarController@showBrandForm', 'as' => 'add-brands']);
        $router->post('add-brands', ['uses' => 'TestCarController@addBrands', 'as' => 'add-brands-post']);

        $router->get('add-marks', ['uses' => 'TestCarController@showMarkForm', 'as' => 'add-mark']);
        $router->post('add-marks', ['uses' => 'TestCarController@addMark', 'as' => 'add-mark-post']);
    });
    

    Route::group(['middleware' => ['auth', 'test']], function($router){
        $router->get('add', ['uses' => 'UserCar@add', 'as' => 'add.car']);
        $router->get('add/{car}/photo', ['uses' => 'UserCar@addPhoto', 'as' => 'add.photo']);
        $router->post('add/{car}/photo', ['uses' => 'UserCar@storePhoto', 'as' => 'store.photo']);
        $router->post('add', ['uses' => 'UserCar@store', 'as' => 'store.car']);
    });

    $router->get('{car}/view', 'TestCarController@view');
});

Route::put('add/{product}/tocart', ['uses' => 'CartController@add', 'as' => 'cart']);
Route::get('shop/cart', 'CartController@viewCart');

Route::get('/', ['uses'=>'HomeController@home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@about', 'as' => 'home.about']);

Auth::routes();
