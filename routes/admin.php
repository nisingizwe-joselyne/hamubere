<?php

Route::group(['prefix'  =>  'admin'], function () {

Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

});