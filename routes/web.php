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
    return redirect()->route('user.showprofile', 'lam-thanh-hoai');
});
//route show user CV
Route::get('/profile/{slug}', 'Frontend\UserController@show')->name('user.showprofile');

//post
Route::get('/blog','Frontend\PostController@index')->name('frontend.post.index');
Route::get('/blog/{slug}','Frontend\PostController@show')->name('frontend.post.show');
