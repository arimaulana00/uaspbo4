<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'checkSession'], function () {
        Route::get('/','HomeController@index');
        Route::get('/user', 'UserController@index');
        Route::get('/list', 'USerController@list');
        Route::get('/add', 'UserController@tambah');
        Route::get('/edit{id}', 'UserController@edit');
        Route::get('menus', 'MenuController@index');
        Route::get('menus-show', 'MenuController@show');
        Route::post('menus', 'MenuController@store')->name('menus.store');
        
        Route::post('/simpan', 'UserController@simpan');
        Route::post('/update', 'UserController@update');
        Route::get('sysmnenu', 'MenuController@index');
        Route::get('sysmenus-show', 'MenuController@show');
        Route::post('sysmenus', 'MenuController@store')->name('menus.store');
            
});

Route::get('/login','HomeController@login');
Route::post('/masuk', 'HomeController@masuk');