<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Guest Pages 

Route::get('project', function () {return view('guest.project');});

Route::get('member', function () {return view('guest.member');});

Route::get('myhub', function () {return view('guest.myhub');});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('setting/profile', 'UserController@profile');


// AdminLTE Sample Pages

Route::get('sample/widgets', 'AdminlteController@widgets');

Route::get('sample/icons', 'AdminlteController@icons');

Route::get('sample/icons', 'AdminlteController@icons');

Route::get('sample/profile', 'AdminlteController@profile');

