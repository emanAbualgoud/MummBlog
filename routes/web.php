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

Auth::routes();


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin', 'namespace' => 'Admin'],function() {

    Route::get('/', function () {
        return redirect()->route('admin.home');
    });

    Route::get('/home', [
        'uses' => 'HomeController@home',
        'as' => 'home'
    ]);

    Route::get('/statistics', [
        'uses' => 'HomeController@statistics',
        'as' => 'statistics'
    ]);
});


Route::group([ 'namespace' => 'Web'],function() {

    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::get('/about', [
        'uses' => 'HomeController@getAbout',
        'as' => 'about'
    ]);

    Route::get( '/categories/{categoryId}', [
        'uses' => 'CategoryController@categoryPosts',
        'as'   => 'category-posts'
    ] );

});
