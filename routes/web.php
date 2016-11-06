<?php

Route::group(['prefix' => 'auto'], function($router){
    $router->get('add-brands', ['uses' => 'TestCarController@showBrandForm', 'as' => 'add-brands']);
    $router->post('add-brands', ['uses' => 'TestCarController@addBrands', 'as' => 'add-brands-post']);
    
    $router->get('add-marks', ['uses' => 'TestCarController@showMarkForm', 'as' => 'add-mark']);
    $router->post('add-marks', ['uses' => 'TestCarController@addMark', 'as' => 'add-mark-post']);

    $router->get('add', ['uses' => 'UserCar@add', 'as' => 'add.car']);
    $router->post('add', ['uses' => 'UserCar@store', 'as' => 'store.car']);
});

Route::get('/', ['uses'=>'HomeController@home', 'as' => 'home']);
Route::get('about', ['uses' => 'HomeController@about', 'as' => 'home.about']);

Auth::routes();


Route::get('n/{tag}', function(\App\Tag $tag){

    foreach($tag->news as $new){
        echo "<li>{$new->title}</li>";
    }
});

Route::get('relations', function(){
    /*$news = App\News::all();

    foreach($news as $n) {
        echo $n->title . '<hr>';

        foreach ($n->tag as $tag) {
            echo "<li>" . $tag->title . "</li>";
        }
    }*/

    /*$title = 'Наташа Королева';

    $news = \App\News::create([
        'title' => $title
    ]);*/

    $news = \App\News::find(7);

    $news->tag()->sync([2 => ['test' => 'Дура']]);

    $tags= \App\Tag::all();

    foreach ($tags as $tag) {
        echo "<li>";
        echo "<a href='/n/{$tag->id}'>{$tag->title}</a>";
        echo "</li>";
    }
});