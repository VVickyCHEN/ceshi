<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
	
// 中间件测试
Route::get('/checktoken','checktokenController@index')->name('checktoken');

Route::get('/checkrole','checkroleController@index')->name('checkrole');
// 中间件测试

Route::get('/', function () {
    return view('welcome');
})->middleware('checktoken');

// 资源控制器
// 表单提交
Route::resource('post','PostController');

Route::resource('re','ReController');

//注册
Route::group(['namespace' => 'Register'], function () {
    Route::resource('/register','IndexController');
});

Route::resource('/register','Register\IndexController');

// ---------登录---------
// 登录页
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('admin', 'AdminController@index')->name('admin.home');
// ---------登录---------


