<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlteController extends Controller

{
    public function widgets()
    {
        return view('adminlte.widgets');
    }
    
    public function icons()
    {
        return view('adminlte.UI.icons');
    }
    
    public function buttons()
    {
        return view('adminlte.UI.buttons');
    }
    
    public function profile()
    {
        return view('adminlte.examples.profile');
    }
    
    public function general()
    {
        return view('adminlte.forms.general');
    }
    
    public function advanced()
    {
        return view('adminlte.forms.advanced');
    }
    
    public function editors()
    {
        return view('adminlte.forms.editors');
    }
    
    public function blank()
    {
        return view('adminlte.examples.blank');
    }

    public function daterange()
    {
        return view('adminlte.documentation.daterange');
    }

    public function timepicker()
    {
        return view('adminlte.documentation.timepicker');
    }

    public function icheck()
    {
        return view('adminlte.documentation.icheck');
    }

    public function inputmask()
    {
        return view('adminlte.documentation.inputmask');
    }

    public function inputaddon()
    {
        return view('adminlte.documentation.inputaddon');
    }

    public function uigeneral()
    {
        return view('adminlte.documentation.uigeneral');
    }

    public function document()
    {
        return view('adminlte.documentation.document');
    }

    public function documentprint()
    {
        return view('adminlte.documentation.documentprint');
    }

    public function button()
    {
        return view('adminlte.documentation.button');
    }

    public function progress()
    {
        return view('adminlte.documentation.progress');
    }

    public function table()
    {
        return view('adminlte.documentation.table');
    }    
    
}
