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

Route::get('/nosotros', 'PaginasController@nosotros');
Route::get('/contacto', 'PaginasController@contacto');

Route::group(['prefix'=>'articles'],function(){

	route::get('view/{id}',[

		'uses' => 'TestController@view',
		'as' =>  'articlesView'
		]);
});


