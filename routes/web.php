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

//Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/', 'ArticleController@index');
    Route::resource('article','ArticleController');
});
Route::group(['middleware'=>'auth'],function(){

    Route::post('article/{article}/comment', 'CommentController@store');
    Route::delete('comment/{comment}/delete', 'CommentController@destroy');
//    Route::resource('comment','CommentController');
});
Route::group(['middleware'=>'auth'],function(){

    Route::resource('myarticles/', 'MyArticlesController');
//    Route::resource('comment','CommentController');
});


