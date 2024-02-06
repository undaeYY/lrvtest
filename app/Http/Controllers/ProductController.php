<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
class ProductController extends Controller
{
    public function view($id = NULL){
        if($id){
            $data = DB::where('id',$id)->get();
        }else{
            $data = DB::table('studens')->get();
        }
        return view('view', ['data' => $data]);
    }

    public function getadd(){
        return view('add');
    }

    public function postadd(Request $req){
        $validate = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string'
        ],[
            'name.required' => 'vui long nhap khong de trong name!', 
            'email.required' => 'vui long nhap khong de trong email!', 
            'address.required' => 'vui long nhap khong de trong address!', 
            'phone.required' => 'vui long nhap khong de trong phone!' 
        ]);

        DB::table('studens')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'address' => $req->address,
            'phone' => $req->phone
        ]);
        return redirect('view');
    }

    public function delete($id){
        Db::table('studens')->where('id',$id)->delete();
        return redirect('view');
    }

    public function edit($id){
        $data = DB::table('studens')->find($id);

        return view('edit',['data' => $data]);
    }

    public function update(Request $req){
        $validate = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
        ],[
            'name.required' => 'vui long khong de trong!',
            'email.required' => 'vui long khong de trong!',
            'address.required' => 'vui long khong de trong!',
            'phone.required' => 'vui long khong de trong!',
        ]);

       DB::table('studens')->where('id',$req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'address' => $req->address,
            'phone' => $req->phone,
        ]);
        return redirect('view');    
    }

    public function detail($id){
        $data = DB::table('studens')->find($id);

        return view('detail', ['data' => $data]);
    } 
}
