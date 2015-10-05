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

Route::pattern('id', '[0-9]+');

Route::get('/', ['as' => 'site.index', 'uses' => 'SiteController@index']);
Route::get('/post/{id}', ['as' => 'site.post', 'uses' => 'SiteController@post']);
Route::get('/{id}/posts', ['as' => 'site.category.posts', 'uses' => 'SiteController@categoryPosts']);


Route::group(['prefix'=>'admin'], function(){

    Route::group(['prefix'=>'posts'], function() {
        Route::get('/', ['as' => 'admin.posts.index', 'uses' => 'AdminPostsController@index']);

        Route::get('create', ['as' => 'admin.post.create', 'uses' => 'AdminPostsController@create']);
        Route::post('create', ['as' => 'admin.post.store', 'uses' => 'AdminPostsController@store']);

        Route::get('{id}/edit', ['as' => 'admin.post.edit', 'uses' => 'AdminPostsController@edit']);
        Route::post('{id}/edit', ['as' => 'admin.post.update', 'uses' => 'AdminPostsController@update']);

        Route::get('{id}/destroy', ['as' => 'admin.post.destroy', 'uses' => 'AdminPostsController@destroy']);
    });

    Route::group(['prefix'=>'postcategories'], function() {
        Route::get('/', ['as' => 'admin.categories.index', 'uses' => 'AdminPostCategoriesController@index']);
        Route::get('create', ['as' => 'admin.categories.create', 'uses' => 'AdminPostCategoriesController@create']);
        Route::post('create', ['as' => 'admin.categories.store', 'uses' => 'AdminPostCategoriesController@store']);
        Route::get('{id}/edit', ['as' => 'admin.categories.edit', 'uses' => 'AdminPostCategoriesController@edit']);
        Route::post('{id}/edit', ['as' => 'admin.categories.update', 'uses' => 'AdminPostCategoriesController@update']);
        Route::get('{id}/destroy', ['as' => 'admin.categories.destroy', 'uses' => 'AdminPostCategoriesController@destroy']);
    });
});


