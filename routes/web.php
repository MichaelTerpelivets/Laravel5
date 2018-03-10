<?php

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');

//------------------------------------Admin-----------------------------------------------------------------------------
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('logout','Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/users','Admin\Users\UsersController@index')->name('users.list');
    Route::get('/admins','Admin\Admins\AdminsController@index')->name('admins.list');
    Route::resource('employee','Admin\Employee\EmployeeController');
    Route::resource('companies','Admin\Companies\CompaniesController');
});
