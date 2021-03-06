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

Route::group(['middleware'=>'auth'], function (){

    Route::group(['middleware'=>'role:admin'], function (){
        Route::get('/configuracion', function(){
            return view('configuracion');
        });
    });

    Route::group(['middleware'=>'role:editor'], function (){
        Route::get('/formulario', function(){
            return view('formulario');
        });
    });

});
















