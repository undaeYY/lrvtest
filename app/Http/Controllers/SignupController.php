<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function get(Request $request)
    {
        return view('signup');
    }
    

    public function post(Request $request){
       $validate = $request->validate([
            'email' => 'required',
            'pass' => 'required',
        ],[
            'email.required' => 'vui long nhap dia chi email',
            'pass.required' => 'vui long nhap password',
        ]);
        return view('signup');
    }
}
