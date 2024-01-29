<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestIDController extends Controller
{
   public function testID($id,$name){
        $arr = [
            'id' => $id,
            'name' => $name
        ];

        return view('user', $arr);
   }
}
