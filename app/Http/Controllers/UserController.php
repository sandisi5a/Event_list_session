<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Users;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $user = \App\user::all();
        return view('user.index', ['user' => $user]);
    }
    public function create(Request $request)
    {
        $hash_password_saya = Hash::make('halo123');
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'position' => $request->position, 
        ]);
        return redirect('/user')->with('sukses','Sukses di simpan');
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/user ')->with('delete','Sukses di Delete');
    }
    public function edit($id)
        {
            $user = \App\user::find($id);
            return view('user/Edit', ['user'=>$user]);
        }
        public function update(Request $request,$id )
        {
            $user = \App\user::find($id);
            $user ->update($request->all());
        
                 
            return redirect('/user')->with('update','Data berhasil diupdate');
        }
}
