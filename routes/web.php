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

Route::group(['middleware' => ['web']], function () {
   
   Route::get('/home', 'HomeController@index')->name('home');

   Route::resource('postItem', 'PostItemController');
   
   Route::post('postItem/search','PostItemController@search')->name('postItem.search');
   
   Route::resource('readItem', 'ReadItemController');
   
   Route::resource('user', 'UserController');
   
   Route::resource('setting', 'SettingController');
   
   Route::resource('comment', 'CommentController');
   
   Route::resource('message', 'MessageController');
   
   Route::resource('comment_readItem', 'CommentReadItemController');
   
});

