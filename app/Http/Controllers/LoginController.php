<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller

{
    public function loginshow(){
        return view('layout.auth.login');
    }
    public function reg(){
        return view('layout.auth.register');
    }
    public function registerdata( Request $u){

     $data =new User();

     $data->name=$u->name;
     $data->email=$u->email;
    //  $data=Hash::make($u->password);
    $data->password=Hash::make($u->password);


     $data->save();

     return redirect('/');
    }
    public function login(Request $request){

    if($request->isMethod('post')){
     $data = $request->all();

     if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            // dd(auth()->user());
            session()->put('user', auth()->user());

                return redirect()->route('admin/display')->with('message','Login successfully :)');
        }
            else{
                return redirect()->back()->with('message','enter correct email or password successfully :)');
            }
    }
    else{
        return redirect()->back()->with('message','enter correct email or password successfully :)');
    }

 }
 public function logout(){
    Session::flush();
     Auth::logout();
     return redirect('/auth/login');
 }


}
