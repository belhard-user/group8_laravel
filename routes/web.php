<?php


Route::get('/', ['uses'=>'HomeController@home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@about', 'as' => 'home.about']);

Route::get('insert', 'DBController@insert');
Route::get('delete', 'DBController@delete');
Route::get('update', 'DBController@update');
Route::get('select', 'DBController@select');
Route::get('forms', 'DBController@forms');
Route::post('forms', 'DBController@postForm');





/*Route::get('/', function(){
    return 'Main';
});

Route::get('about', function(){
    return 'about';
});

Route::match(['post', 'get'], 'test', function(){
    return 'oOOooOOo';
});


Route::group(['prefix' => 'admin'], function($router){

    $router->get('/', function(){
        return 'Admin Main';
    });

    $router->get('/about', function(){
        return 'Admin about';
    });

});*/

Auth::routes();

Route::get('/home', 'HomeController@index');
