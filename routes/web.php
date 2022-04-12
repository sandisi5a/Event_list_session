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

Route::get('/', function () {
    return view('welcome');
});
//login
Route::GET('/login','AuthController@login')->name('login');
Route::POST('/postlogin','AuthController@postlogin');
Route::GET('/logout', 'AuthController@logout');

//group
Route::group(['middleware'=>['auth','checkrol:Admin']],function(){
    Route::GET('/dashboard','DashboardController@index');
    //Event
    Route::get('/event','EventController@index');
    Route::POST('/event/create','EventController@create');
    Route::GET('/event/{id}/delete','EventController@delete');
    Route::GET('/event/{id}/edit','EventController@edit');
    Route::POST('/event/{id}/update','EventController@update');
    //user
    Route::get('/user','UserController@index');
    Route::POST('/user/create','UserController@create');
    Route::GET('/user/{id}/delete','UserController@delete');
    Route::GET('/user/{id}/edit','UserController@edit');
    Route::POST('/user/{id}/update','UserController@update');
});
Route::group(['middleware'=>['auth','checkrol:Admin,Operator']],function(){
    Route::GET('/dashboard','DashboardController@index');
    //Event
    Route::get('/event','EventController@index');
    
});

    
