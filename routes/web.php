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


Route::get('/', 'BaseController@index');


Route::post('/search-destinations', 'SearchController@getResults');

Route::get('/make-favourite', 'SearchController@setCookies');

Route::get('/remove-favourite', 'SearchController@deleteCookies');

Route::get('/result', function () {
    return view('search-results');
});

Auth::routes();
