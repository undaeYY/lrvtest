<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
class ProductController extends Controller
{
    public function addview(){ // GET
        return view('save');
    }

    public function list($id = null){    
        if($id){
            $data = UserModel::where('id',$id)->get();
        }else{
            $data = UserModel::all();
        }

       $arr['data'] = $data;
        /*$data = UserModel::paginate(3);*/
        return view('product',['data' => $data]);
    }

    public function add(Request $req){ // POST

        $validate = $req->validate([
            'tens' => 'required|string',
            'phuk' => 'required|string',
            'gias' => 'required|numeric'
        ],[
            'tens.required' => "nhap string",
            'phuk.required' => "nhap string",
            'gias.required' => "nhap so",
        ]);


        $thuvien = new UserModel();
        $thuvien->tensach = $req->tens;
        $thuvien->phukien = $req->phuk;
        $thuvien->giasach = $req->gias;
        $thuvien->save();

        print_r($req->input());
        return view('save');
    }

    public function delete($id){
        $thuvien = new UserModel();
        $data = $thuvien->find($id);
        $data->delete();

        echo 'da xoa: '.$id;
    }
}
