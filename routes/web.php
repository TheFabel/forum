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

Route::get('/', 'PagesController@index');

Route::get('/theme/{id}', 'PagesController@theme');

Route::post('/add', 'AnswersController@add');

Route::get('/add', 'AnswersController@add');

//Route::post('/search', 'SearchController@index');
Route::get('/search', 'SearchController@index');

Route::get('/test', 'PagesController@test');

//Route::post('/add', function(\Illuminate\Http\Request $request)
//{
//    echo $request['comment'];
//});

//Route::get('/add', function(\Illuminate\Http\Request $request)
//{
//    echo $request['user_firstname'];
//});