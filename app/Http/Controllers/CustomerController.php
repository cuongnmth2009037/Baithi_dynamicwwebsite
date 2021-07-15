<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function register(){
       return view('customer.register');
   }
   public function success_register(Request $request){
       $name = $request->get('name');
       $email = $request->get('email');
       $birthday = $request->get('birthday');
       $phone = $request->get('phone');
       $address = $request->get('address');
       return view('customer.success_register',[
           'name'=>$name,
           'email'=>$email,
           'birthday'=>$birthday,
           'phone'=>$phone,
           'address'=>$address
       ]);
   }
}
