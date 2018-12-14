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

Route::get('sample/buttons', 'AdminlteController@buttons');

Route::get('sample/profile', 'AdminlteController@profile');

Route::get('sample/forms/general', 'AdminlteController@general');

Route::get('sample/forms/advanced', 'AdminlteController@advanced');

Route::get('sample/forms/editors', 'AdminlteController@editors');


    Route::get('sample/daterange', 'AdminlteController@daterange');

    Route::get('sample/timepicker', 'AdminlteController@timepicker');

    Route::get('sample/inputmask', 'AdminlteController@inputmask');

    Route::get('sample/icheck', 'AdminlteController@icheck');

    Route::get('sample/inputaddon', 'AdminlteController@inputaddon');

    Route::get('sample/uigeneral', 'AdminlteController@uigeneral');

    Route::get('sample/document', 'AdminlteController@document');

    Route::get('sample/documentprint', 'AdminlteController@documentprint');

    Route::get('sample/button', 'AdminlteController@button');

    Route::get('sample/progress', 'AdminlteController@progress');


Route::get('blank', 'AdminlteController@blank');

