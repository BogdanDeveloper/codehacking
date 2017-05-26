<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Route::resource('/admin/users', 'AdminUsersController@index');

Route::get('/admin/users', 'AdminUsersController@index') -> name('all_users');

Route::get('/admin/users/create', 'AdminUsersController@create') -> name('create_users');

Route::post('/admin/users/store', 'AdminUsersController@store');

Route::get('/admin/home', function(){
	return view('admin.admin');
});