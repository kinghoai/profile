<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Auth::routes();

Route::get('/', 'Admin\AdminController@index')->name('admin');

Route::resource('/users', 'Admin\AdminUserController');
