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

//revalidate - prevent back history
Route::group(['middleware' => 'revalidate'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();
    
    // cof 
    Route::get('/cof/logout', 'Auth\LoginController@userLogout')->name('cof.logout');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/hauler', 'HomeController@hauler')->name('pages.hauler');
    Route::get('/create_hauler', 'HomeController@create_hauler')->name('pages.create_hauler');
    Route::get('/roadtanker', 'HomeController@roadtanker')->name('pages.roadtanker');
    Route::get('/upload', 'HomeController@upload')->name('pages.upload');
    
    //status create
    Route::get('/create_status', 'HomeController@create_status_langkawi')->name('pages.create_status.langkawi');
    Route::get('/show_status', 'HomeController@show_status_langkawi')->name('pages.show_status.langkawi');

    Route::post('status_details', 'HomeController@status_details')->name('status_details');

    // haule admin create
    Route::post('hauler_create', 'HomeController@store_hauler')->name('hauler_admin.store');
    Route::post('status_create', 'HomeController@store_status')->name('status.store');

    // roadtanker upload
    Route::post('roadtanker-import', 'RoadtankerController@RoadtankerImport')->name('roadtanker.import');
    Route::get('roadtanker-export/{type}', 'RoadtankerController@RoadtankerExport')->name('roadtanker.export');

    // terminal
    Route::get('/prai', 'HomeController@prai')->name('terminal.prai');
    Route::get('/kerteh', 'HomeController@kerteh')->name('terminal.kerteh');
    Route::get('/kuantan', 'HomeController@kuantan')->name('terminal.kuantan');
    Route::get('/kvdt', 'HomeController@kvdt')->name('terminal.kvdt');
    Route::get('/langkawi', 'HomeController@langkawi')->name('terminal.langkawi');
    Route::get('/lumut', 'HomeController@lumut')->name('terminal.lumut');
    Route::get('/melaka', 'HomeController@melaka')->name('terminal.melaka');
    Route::get('/pgudang', 'HomeController@pgudang')->name('terminal.pgudang');
    Route::get('/westport', 'HomeController@westport')->name('terminal.westport');

    Route::prefix('hauler_admin')->group(function(){

        Route::get('/', 'HaulerAdminController@index')->name('hauler_admin.dashboard');
        Route::get('/login', 'Auth\HaulerLoginController@showLoginForm')->name('hauler_admin.login');
        Route::post('/login', 'Auth\HaulerLoginController@login')->name('hauler_admin.login.submit');
        Route::get('/logout', 'Auth\HaulerLoginController@logout')->name('hauler_admin.logout');
        Route::get('/prai', 'HaulerAdminController@prai')->name('hauler_admin.prai');
        Route::get('/kerteh', 'HaulerAdminController@kerteh')->name('hauler_admin.kerteh');
        Route::get('/kuantan', 'HaulerAdminController@kuantan')->name('hauler_admin.kuantan');
        Route::get('/kvdt', 'HaulerAdminController@kvdt')->name('hauler_admin.kvdt');
        Route::get('/langkawi', 'HaulerAdminController@langkawi')->name('hauler_admin.langkawi');
        Route::get('/lumut', 'HaulerAdminController@lumut')->name('hauler_admin.lumut');
        Route::get('/melaka', 'HaulerAdminController@melaka')->name('hauler_admin.melaka');
        Route::get('/pgudang', 'HaulerAdminController@pgudang')->name('hauler_admin.pgudang');
        Route::get('/westport', 'HaulerAdminController@westport')->name('hauler_admin.westport');

        
        Route::get('/status/{terminal}', 'HaulerAdminController@status')->name('hauler_admin.status');
        Route::post('status_details', 'HaulerAdminController@status_details')->name('hauler_admin.status_details');
        Route::post('/status/update', 'HaulerAdminController@status_update')->name('hauler_admin.status_update');
        
    });

});
//end revalidate