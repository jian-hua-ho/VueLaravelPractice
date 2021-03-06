<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'vue'], function () {
    Route::get('simple-example', 'VueController@simpleExample');
    Route::get('render-list', 'VueController@renderList');
    Route::get('condition', 'VueController@condition');
    Route::get('handle-event', 'VueController@handleEvent');
    Route::get('filter', 'VueController@filter');
    Route::get('computed', 'VueController@computed');
    Route::get('computed-setter', 'VueController@computedSetter');
    Route::get('style-binding', 'VueController@styleBinding');
    Route::get('component', 'VueController@component');
    Route::get('modularization', 'VueController@modularization');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
