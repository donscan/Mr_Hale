<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    dd($_SERVER);
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['admin']],function()
{
	// 这几个路由功能分别是 主页 信息页 退出 修改密码 
	// 带有web admin中间件验证功能
	Route::get('index','IndexController@index');
	Route::get('info','IndexController@info');
	Route::get('quit','IndexController@quit');
	Route::any('pass','IndexController@pass');
	
	Route::post('cate/changeorder','CategoryController@changeorder');
	Route::resource('category','CategoryController');
});

Route::group(['namespace' => 'Admin','prefix' => 'admin'],function()
{
	// 这些路由功能分别是 登陆 验证码 和解密
	Route::any('login','LoginController@login');
	Route::get('code','LoginController@code');
	Route::any('crypt','LoginController@crypt');
});
