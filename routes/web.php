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
Route::get('/index',[
    'uses' => 'IndexController@index',
    'as' =>  'Index.page'
]);
Route::get('/index/category_ing',[
    'uses' => 'IndexController@cat_ing',
    'as' =>  'Index.cat_ing'
]);
Route::get('/index/contact',[
    'uses' => 'IndexController@contact',
    'as' =>  'Index.contact'
]);
Route::get('/index/elements',[
    'uses' => 'IndexController@elements',
    'as' =>  'Index.elements'
]);
