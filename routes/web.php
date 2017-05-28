<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

#Route::resource('/admin/users', 'AdminUsersController@index');

Route::get('/admin/users', 'AdminUsersController@index') -> name('all_users');

Route::get('/admin/users/create', 'AdminUsersController@create') -> name('create_users');

Route::get('/admin/users/edit-{id}', 'AdminUsersController@edit') -> name('edit_user');

Route::get('/admin/logout_here', function(){
	Auth::logout();
	return redirect(route('home'));
}) -> name('user_logout');





Route::post('/admin/users/store', 'AdminUsersController@store');

Route::post('/admin/posts/store', 'AdminPostsController@store');

Route::get('/admin/home', function(){
	return view('admin.admin');
});

Route::group(['middleware' => 'admin'], function(){

	Route::patch('/admin/users/update/{id}', 'AdminUsersController@update');

	Route::delete('/admin/users/delete/{id}', 'AdminUsersController@destroy');

	Route::get('/admin/posts', 'AdminPostsController@index') -> name('all_posts');

	Route::get('/admin/posts/create', 'AdminPostsController@create') -> name('create_post');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Route::get('auth/logout', 'Auth\AuthController@logout');
