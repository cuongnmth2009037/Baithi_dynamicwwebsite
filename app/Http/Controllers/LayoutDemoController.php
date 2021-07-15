<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutDemoController extends Controller
{
    public function display_Master_Layout(){
       return view('demo.master-layout');
    }
    public function display_Table(){
       return view('demo.table');
    }
    public function display_Form (){
       return view('demo.form');
    }
}
