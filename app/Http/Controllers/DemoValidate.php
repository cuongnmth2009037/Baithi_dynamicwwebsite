<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemoValidateFormRequest;
use Illuminate\Http\Request;

class DemoValidate extends Controller
{
   public function create(){
       return view('demo-validate');

   }
   public function store(DemoValidateFormRequest $request){
       $request->validated();

   }
}
