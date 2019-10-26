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

Route::resource('/user', 'Admin\AdminUserController');

Route::resource('/category', 'Admin\AdminCategoryController');

Route::resource('/page', 'Admin\AdminPageController');

Route::resource('/post', 'Admin\AdminPostController');
