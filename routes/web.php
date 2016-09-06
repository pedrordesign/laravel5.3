<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();


Route::get('/', 'PostsController@index');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    
    Route::get('', function(){})->middleware('auth');

    Route::group(['prefix'=>'posts'], function(){
        Route::get('', ['as'=>'admin.posts.index', 'uses'=> 'PostsAdminController@index']);
        Route::get('create', ['as'=>'admin.posts.create', 'uses'=> 'PostsAdminController@create']);
        Route::get('edit/{id}', ['as'=>'admin.posts.edit', 'uses'=> 'PostsAdminController@edit']);
        Route::post('store', ['as'=>'admin.posts.store', 'uses'=> 'PostsAdminController@store']);
        Route::put('update/{id}', ['as'=>'admin.posts.update', 'uses'=> 'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as'=>'admin.posts.destroy', 'uses'=> 'PostsAdminController@destroy']);
    });
});

