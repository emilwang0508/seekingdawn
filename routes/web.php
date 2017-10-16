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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/presskit', 'HomeController@presskit')->name('presskit');
Route::get('/post/{id}', 'PostController@show')->name('post');
Route::get('/posts', 'PostController@_list')->name('posts');




Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome',compact('locale'));
});
Route::get('/', function () {
    return view('welcome');
});