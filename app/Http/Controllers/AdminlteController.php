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
    
}
