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

//Route::get('/', function () {
//    return view('welcome');
//});


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
    $route->resource('news', 'NewsController');

    /**
     * category routes.
     */
    $route->resource('categories', 'CategoryController');

    /**
     * message routes.
     */
    $route->get('messages', 'MessageController@index')->name('messages.index');

    /**
     * account setting.
     */
    $route->any('account', 'AccountController')->name('account.edit');

    /**
     * site.
     */
    $route->post('site/setting', 'SiteController@setting')->name('site.setting');
});

Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');
Route::get('contact', 'HomeController@contact');
Route::get('case', 'HomeController@successCase');
Route::get('category/{id}', 'HomeController@category');
Route::get('news/{id}', 'HomeController@news');

Route::post('messages', 'Admin\\MessageController@store')->name('post:message');

