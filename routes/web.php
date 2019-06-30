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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/profile', 'HomeController@profile')->name('profile');

Auth::routes();
Route::get('/', 'TopicController@index');
Route::resource('/topic', 'TopicController');
Route::post('/topic/{id}', 'TopicController@comment');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');