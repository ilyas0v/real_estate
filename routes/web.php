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


Route::get('login' , function(){
    return view('login');
});

Auth::routes();

Route::get('/home', function(){
    return view('home');
})->middleware('auth');

Route::group(['prefix' => 'admin' , 'middleware'=>'auth'], function(){
    Route::get('/' , function(){
        return view('admin.main');
    })->name('admin.main');
    Route::resource('homes' , 'HomeController');
    Route::resource('regions' , 'RegionController');
});