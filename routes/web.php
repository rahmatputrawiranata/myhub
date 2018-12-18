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

// Guest Pages 

Route::get('welcome', function () {return view('welcome');});

Route::get('project', function () {return view('guest.project');});

Route::get('member', function () {return view('guest.member');});

Route::get('myhub', function () {return view('guest.myhub');});

// AdminLTE Sample Pages

Route::get('sample/widgets', function () {return view('templates.adminlte.documentation.widgets');});
Route::get('sample/charts/chartjs', function () {return view('templates.adminlte.documentation.charts.chartjs');});

Route::get('sample/UI/buttons', function () {return view('templates.adminlte.documentation.UI.buttons');});
Route::get('sample/UI/general', function () {return view('templates.adminlte.documentation.UI.general');});
Route::get('sample/UI/icons', function () {return view('templates.adminlte.documentation.UI.icons');});
Route::get('sample/UI/sliders', function () {return view('templates.adminlte.documentation.UI.sliders');});
Route::get('sample/UI/timeline', function () {return view('templates.adminlte.documentation.UI.timeline');});
Route::get('sample/UI/modals', function () {return view('templates.adminlte.documentation.UI.modals');});

Route::get('sample/forms/general', function () {return view('templates.adminlte.documentation.forms.general');});
Route::get('sample/forms/advanced', function () {return view('templates.adminlte.documentation.forms.advanced');});
Route::get('sample/forms/editors', function () {return view('templates.adminlte.documentation.forms.editors');});

Route::get('sample/tables/simple', function () {return view('templates.adminlte.documentation.tables.simple');});
Route::get('sample/tables/data', function () {return view('templates.adminlte.documentation.tables.data');});

Route::get('sample/mailbox/compose', function () {return view('templates.adminlte.documentation.mailbox.compose');});
Route::get('sample/mailbox/mailbox', function () {return view('templates.adminlte.documentation.mailbox.mailbox');});
Route::get('sample/mailbox/read-mail', function () {return view('templates.adminlte.documentation.mailbox.read-mail');});

Route::get('sample/calendar', function () {return view('templates.adminlte.documentation.calendar');});

Route::get('sample/examples/invoice', function () {return view('templates.adminlte.documentation.examples.invoice');});

Route::get('sample/examples/icons', function () {return view('templates.adminlte.documentation.examples.icons');});
Route::get('sample/examples/register', function () {return view('templates.adminlte.documentation.examples.register');});
Route::get('sample/examples/lockscreen', function () {return view('templates.adminlte.documentation.examples.lockscreen');});
Route::get('sample/examples/404', function () {return view('templates.adminlte.documentation.examples.404');});
Route::get('sample/examples/blank', function () {return view('templates.adminlte.documentation.examples.blank');});
Route::get('sample/examples/pace', function () {return view('templates.adminlte.documentation.examples.pace');});
Route::get('sample/examples/500', function () {return view('templates.adminlte.documentation.examples.500');});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('networks', 'AdminlteController@networks');
Route::get('jobs', 'AdminlteController@jobs');
Route::get('learning', 'AdminlteController@learning');
Route::get('market', 'AdminlteController@market');

Route::get('setting/profile', 'AdminlteController@profile');
Route::get('sample/examples/profilepage', 'AdminlteController@profilepage');
