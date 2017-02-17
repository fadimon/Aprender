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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //usa el middleware auth para evitar que usuarios sin autenticar ingresen a las vistas

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

    route::resource('tags', 'TagsController');
    route::get('tags/{id}/destroy', [
        'uses' => 'TagsController@destroy',
        'as'   => 'admin.tags.destroy',
    ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index');
