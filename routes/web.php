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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {

    route::resource('users', 'UsersController');

    route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as'   => 'admin.users.destroy',
    ]);

    route::resource('categories', 'CategoriesController');
    route::get('categories/{id}/destroy', [
        'uses' => 'CategoriesController@destroy',
        'as'   => 'admin.categories.destroy',
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index');
