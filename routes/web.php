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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/timeline','Auth\TimelineController@showTimeLinePage',function(){
    // $tweets_data =DB::select('select * form tweets');
});

Route::post('/timeline','Auth\TimelineController@postTweet');