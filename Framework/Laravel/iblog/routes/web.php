<?php

  Route::get('/',function() {
    return view('welcome');
  });

  // Route::get($uri, $callback);
  // Route::post($uri,$callback);
  // Route::put($uri, $callback);
  // Route::patch($uri,$callback);
  // Route::delete($uri,$callback);
  // Route::options($uri, $callback);

  Route::match(['get','post'],'/',function(){

  });
  Route::any('foo',function(){
    return 'Any Route';
  });

  // Route::get('user/{id}',function($id){
  //   return 'User : '.$id;
  // });

  // Route::get('name/{name}',function($name){
  //   return 'User Name : '.$name;
  // });
  //
  // Route::get('user{name?}',function($name = 'NULL'){
  //   return $name;
  // });
  //
  // Route::get('user/profile',function(){
  //
  // })->name('profile');

  // $url = route('profile');
  // $redirect = redirect() -> route('profile');
  //
  // Route::get('user/{id}/profile',['as' => 'profile', function($id){
  //
  // }]);
  // $url = route('profile',['id' => 1]);

  Route::group(['profile' => 'use'],function(){
    Route::get('user/{id}',function($id){
      return 'User id:'.$id;
    });
  });

  Route::group(['namespace' => 'Admin'],function(){
    Route::group(['namespace' => 'User'], function(){
      
    });
  });
