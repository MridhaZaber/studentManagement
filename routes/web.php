<?php



Route::get('/', 'StudentController@index')->name('index');
Route::get('/create', 'StudentController@create')->name('create');
Route::get('/edit/{id}', 'StudentController@edit')->name('edit');
Route::post('/store', 'StudentController@store')->name('store');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::Post('delete/{id}','StudentController@delete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
///admin routes.......
Route::GET('admin/home'.'AdminController@index');

Route::get('admin','Admin\LoginController@ShowLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendRestLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@ShowResetForm')->name('admin.password.reset');






