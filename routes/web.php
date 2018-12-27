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
    return view('coming');
});


Route::get('new', function () {return view('guest.welcome');});


// Guest Pages 

Route::get('welcome', function () {return view('welcome');});

Route::get('project', function () {return view('guest.project');});

Route::get('member', function () {return view('guest.member');});

Route::get('myhub', function () {return view('guest.myhub');});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/remotehub/home', 'RemotehubController@index')->name('remotehub');

Route::get('/events/home', 'EventController@index')->name('events');

Route::get('/jobs/home', 'JobController@index')->name('jobs');

Route::get('/market/home', 'MarketController@index')->name('market');

Route::get('/user/home', 'UserController@index')->name('user');