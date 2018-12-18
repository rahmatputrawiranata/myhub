<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlteController extends Controller

{
 
    public function networks()
    {
        return view('user.networks');
    }
    public function jobs()
    {
        return view('user.jobs');
    }
    public function learning()
    {
        return view('user.learning');
    }
    public function market()
    {
        return view('user.market');
    }
    public function widgets()
    {
        return view('templates.adminlte.documentation.widgets');
    }
    
    public function icons()
    {
        return view('templates.adminlte.documentation.UI.icons');
    }
    
    public function buttons()
    {
        return view('templates.adminlte.documentation.UI.buttons');
    }
    
    public function profilepage()
    {
        return view('templates.adminlte.documentation.examples.profile');
    }
    
    public function profile()
    {
        return view('user.profile');
    }
    
    public function general()
    {
        return view('templates.adminlte.documentation.forms.general');
    }
    
    public function advanced()
    {
        return view('templates.adminlte.documentation.forms.advanced');
    }
    
    public function editors()
    {
        return view('templates.adminlte.documentation.forms.editors');
    }
    
    public function blank()
    {
        return view('templates.adminlte.documentation.examples.blank');
    }

    public function daterange()
    {
        return view('templates.adminlte.documentation.documentation.daterange');
    }

    public function timepicker()
    {
        return view('templates.adminlte.documentation.documentation.timepicker');
    }

    public function icheck()
    {
        return view('templates.adminlte.documentation.documentation.icheck');
    }

    public function inputmask()
    {
        return view('templates.adminlte.documentation.documentation.inputmask');
    }

    public function inputaddon()
    {
        return view('templates.adminlte.documentation.documentation.inputaddon');
    }

    public function uigeneral()
    {
        return view('templates.adminlte.documentation.documentation.uigeneral');
    }

    public function document()
    {
        return view('templates.adminlte.documentation.documentation.document');
    }

    public function documentprint()
    {
        return view('templates.adminlte.documentation.documentation.documentprint');
    }

    public function button()
    {
        return view('templates.adminlte.documentation.documentation.button');
    }

    public function progress()
    {
        return view('templates.adminlte.documentation.documentation.progress');
    }

    public function table()
    {
        return view('templates.adminlte.documentation.documentation.table');
    }    
    
}
