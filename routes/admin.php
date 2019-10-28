<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'Admin\AdminController@index')->name('admin');

	Route::resource('/user', 'Admin\AdminUserController');

	Route::resource('/category', 'Admin\AdminCategoryController');

	Route::resource('/page', 'Admin\AdminPageController');

	Route::resource('/post', 'Admin\AdminPostController');

	Route::resource('/skill', 'Admin\SkillController');

	Route::resource('/experience', 'Admin\ExperienceController');

	Route::resource('/education', 'Admin\EducationController');

	Route::resource('/project', 'Admin\AdminProjectController');
});



