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
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/users/list', 'UsersController@index');
Route::get('/ogs/list', 'OgsController@showSavedOgs');
Route::get('/massiva', 'MassivasController@tela');

Route::resources([
    'ogs' => 'OgsController',
    'posts' => 'PostsController'
]);



Auth::routes();

