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

Route::get('/depot/{id}', 'DepotController@index')->name('depot');

Route::get('/depots/getByArchive/{id}', 'DepotController@getByArhive');

Route::get('/depots/addMaterial/{depot_id}', 'MaterialController@addMaterial');

Route::get('/materials/getParameters/{type_id}', 'MaterialController@getParameters');

Route::get('/materials/delete/{id}/{depot_id}', 'MaterialController@delete');

Route::get('/materials/search', 'MaterialController@search');

Route::get('/materials/{id}', 'MaterialController@index');

Route::post('/materials/add', 'MaterialController@add');

Route::post('/materials/update', 'MaterialController@update');