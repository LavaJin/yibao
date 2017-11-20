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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth']], function ($route) {

    /**
     * home routes.
     */
    $route->get('home', 'HomeController@index')->name('home');

    /**
     * article routes.
     */
    $route->resource('articles', 'ArticleController');

    /**
     * category routes.
     */
    $route->resource('categories', 'CategoryController');
});

