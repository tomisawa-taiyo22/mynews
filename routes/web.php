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
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function(){
    Route::get('news/create','User\NewsController@add')->middleware('auth');
    Route::post('news/create', 'User\NewsController@create')->middleware('auth');
    Route::get('news','User\NewsController@index')->middleware('auth');
    Route::get('news/edit','User\NewsController@edit')->middleware('auth');
    Route::post('news/edit','User\NewsController@update')->middleware('auth');
    Route::get('news/delete','User\NewsController@delete')->middleware('auth');
    Route::get('profile/create','User\ProfileController@add');
    Route::get('profile/edit','User\ProfileController@edit');
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
