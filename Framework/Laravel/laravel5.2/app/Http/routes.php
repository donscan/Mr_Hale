<?php

Route::get('/',function()
{
	return view('welcome');
});

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['web','admin' ] ],function()
{
	Route::get('login','LoginController@login');

});
Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['web']],function()
{
	Route::get('code','LoginController@code');
	Route::get('gcode','LoginController@getcode');
});
