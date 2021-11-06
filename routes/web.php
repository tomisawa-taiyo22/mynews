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
//一気に変更できるようにgroup化している
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news','Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit','Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit','Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete','Admin\NewsController@delete')->middleware('auth');
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});

Route::get('/', 'NewsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
