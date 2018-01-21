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
Route::get('/roadtanker', 'HomeController@roadtanker')->name('pages.roadtanker');
Route::get('/upload', 'HomeController@upload')->name('pages.upload');

Route::post('roadtanker-import', 'RoadtankerController@RoadtankerImport')->name('roadtanker.import');
Route::get('roadtanker-export/{type}', 'RoadtankerController@RoadtankerExport')->name('roadtanker.export');

Route::get('/prai', 'HomeController@prai')->name('terminal.prai');