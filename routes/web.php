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
    return view('guest.welcome');
});


Route::get('new', function () {return view('templates.home-reveal');});


// Guest Pages 

Route::get('welcome', function () {return view('welcome');});

Route::get('project', function () {return view('guest.project');});

Route::get('member', function () {return view('guest.member');});

Route::get('myhub', function () {return view('guest.myhub');});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
