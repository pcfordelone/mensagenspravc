<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function(){

    Route::pattern('id', '[0-9]+');

    Route::group(['prefix'=>'posts'], function() {
        Route::get('/', ['as' => 'posts.index', 'uses' => 'AdminPostsController@index']);

        Route::get('create', ['as' => 'post.create', 'uses' => 'AdminPostsController@create']);
        Route::post('create', ['as' => 'post.store', 'uses' => 'AdminPostsController@store']);

        Route::get('{id}/edit', ['as' => 'post.edit', 'uses' => 'AdminPostsController@edit']);
        Route::post('{id}/edit', ['as' => 'post.update', 'uses' => 'AdminPostsController@update']);

        Route::get('{id}/destroy', ['as' => 'post.destroy', 'uses' => 'AdminPostsController@destroy']);
    });

    Route::group(['prefix'=>'post_categories'], function() {
        Route::get('/', ['as' => 'categories.index', 'uses' => 'AdminPostCategoriesController@index']);
        Route::get('create', ['as' => 'categories.create', 'uses' => 'AdminPostCategoriesController@create']);
        Route::post('create', ['as' => 'categories.store', 'uses' => 'AdminPostCategoriesController@store']);
        Route::get('{id}/edit', ['as' => 'categories.edit', 'uses' => 'AdminPostCategoriesController@edit']);
        Route::post('{id}/edit', ['as' => 'categories.update', 'uses' => 'AdminPostCategoriesController@update']);
        Route::get('{id}/destroy', ['as' => 'categories.destroy', 'uses' => 'AdminPostCategoriesController@destroy']);
    });
});


