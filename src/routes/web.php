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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/redisTest', function(){
  $redis = app()->make('redis');
  $redis->set('key1', 'testValue');
  return $redis->get('key1');
});

Route::get('/', 'PagesController@frontpage');
Route::get('/profile/{id}', ['uses' =>'PagesController@profile']);

Route::get('/getActivity', 'ActivityController@getActivity');
// Route::get('/activity');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
