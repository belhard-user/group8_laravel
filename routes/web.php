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
        $router->post('add', ['uses' => 'UserCar@store', 'as' => 'store.car']);
    });

});

Route::get('/', ['uses'=>'HomeController@home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@about', 'as' => 'home.about']);

Auth::routes();
