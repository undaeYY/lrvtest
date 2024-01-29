<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function index(){
        return view("upload");
    }

    public function upload(Request $req){
        $validate = $req->validate([
            'file' => 'required|image',
        ],[
            'file.required' => 'vui chon file image',
        ]);

        $path = $req->file('file')->store('public');
        echo $path;
        return view("upload", ["path"=>$path]);

    }   
}
