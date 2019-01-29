<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::group(['prefix'=>'admin','namespace'=>'admin'],function (){
    Route::get('/', 'AdminController@index');
    Route::group(['prefix'=>'users'],function (){
        Route::get('/', 'UsersController@index')->name('admin.users');
        Route::get('create', 'UsersController@create')->name('admin.user.create');
        Route::post('store', 'UsersController@store')->name('admin.user.store');
        Route::get('delete/{user_id}', 'UsersController@delete')->name('admin.user.delete');
        Route::get('edit/{user_id}', 'UsersController@edit')->name('admin.user.edit');
        Route::post('update/{user_id}', 'UsersController@update')->name('admin.user.update');
    });
    Route::group(['prefix'=>'posts'],function (){
        Route::get('/', 'PostsController@index')->name('admin.posts');
        Route::get('create', 'PostsController@create')->name('admin.post.create');
        Route::post('store', 'PostsController@store')->name('admin.post.store');
        Route::get('delete/{post_id}', 'PostsController@delete')->name('admin.post.delete');
        Route::get('edit/{post_id}', 'PostsController@edit')->name('admin.post.edit');
        Route::post('update/{post_id}', 'PostsController@update')->name('admin.post.update');
    });

});
