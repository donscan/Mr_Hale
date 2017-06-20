<?php

	Route::get('/', function () {
	    return view('welcome');
	});
	// Route 访问方式
		/*
		Route::get('get',function()
		{
			return 'Get Route Way';
		});
		Route::post('post',function()
		{
			return 'Post Route Way';
		});
		Route::put('put',function()
		{
			return 'Put Route Way';
		});
		Route::patch('patch',function()
		{
			return 'Patch Route Way';
		});
		Route::delete('delete',function()
		{
			return 'Delete Route Way';
		});
		Route::options('options',function()
		{
			return 'Options Route Way';
		});
		Route::match(['get','post','patch'],'match',function()
		{
			return 'Match Route Way';
		});
		Route::any('any',function()
		{
			return 'Any Route Way';
		});
		*/
	// Route 参数
	// 这是必选参数
		/*
		Route::get('user/{id}',function($id)
		{
			return 'User Id :'.$id;
		})->where('id','[0-9]+');
		*/
		/*
		Route::get('user/{name}/id/{id}',function($username,$userid)
		{
			return 'User Name :'."$username". '&nbsp;'. ' Id :'."$userid";
		});
		// 这是可选参数  后面添加 ？ 号 设置值为 null
		Route::get('user/{name?}',function($name = null)
		{
			return $name;
		});
		*/
	// 路由别名
		/*
		Route::get('study',['as' => 'profile',function()
		{
			echo Route('profile');
		}]);
		*/
		// Route::get('study/index','Study\StudyController@index') -> name('profile');
	// Route Controller 路由控制器访问方式
		// Route::get('study/index','Study\StudyController@index');
	// 路由群租
	Route::group(['prefix' => 'study','namespace' => 'Study'],function()
	{
		Route::get('php','StudyController@php');
		// 资源路由
		Route::resource('resource','StudyController');
	});

	// 中间件 Session 只能在中间件中使用
	Route::group(['middleware' => ['web','hale']],function()
	{
		Route::get('put',function()
		{
			session(['key' => 'Middleware']);
			return view('welcome');
		});
		Route::get('get',function()
		{
			echo session('key');
			return view('welcome');
		});
	});
	// 登陆认证的 中间件  
	Route::group(['prefix' => 'user','namespace' => 'Study','middleware' => ['web','hale'] ],function()
	{
		Route::get('index','StudyController@index');
	});
	Route::get('user/login','Study\StudyController@login');

	// 视图 View
	Route::group(['prefix' => 'user', 'namespace' => 'Study'],function()
	{
		Route::get('view','StudyController@view');
		Route::get('index','StudyController@views');
	});

