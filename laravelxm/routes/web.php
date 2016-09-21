<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/user','UserController@index');
// Route::get('/user/{id?}','UserController@show');
// Route::get('/user/del/{id}','UserController@del');
// Route::get('/user/{id}','UserController@update');

Route::resource('user','UserController');

// // 基础路由
// Route::get('/hello',function(){
// 	return 'hello Get';
// });

// Route::post('/user/',function(){
// 	return 'Hello POST';
// });

// Route::put('/hello',function(){
// 	return 'hello PUT';
// });

// Route::delete('/hello',function(){
// 	return 'hello Delete';
// });

// Route::match(['get','post','put'] , '/aa', function(){
// 	return 'Hello World';
// });
// // 带参数的路由
// Route::get('/test/{id?}',function($id=''){
// 	return 'Hello World'.$id;
// });
// // 带限制条件的
// // Route::get('test/{id?}',function($id=''){
// // 	return 'Hello World'.$id;
// // })->where('id','[0-9]+');
// // 带限制条件的
// Route::get('test/{id?}',function($id=''){
// 	return 'Hello World'.$id;
// })->where('id','[1]+');