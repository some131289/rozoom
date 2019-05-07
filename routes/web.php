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

Route::group(['prefix'=>'simulator', 'namespace'=>'Simulator', 'middleware'=>['auth']], function(){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('simulator.admin.index');
    Route::resource('/discipline', 'SimulatorDisciplineController', ['as'=>'simulator']);
    Route::resource('/category', 'SimulatorCategoryController', ['as'=>'simulator']);
});