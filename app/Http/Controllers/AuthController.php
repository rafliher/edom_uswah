<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
        
    //
    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = ModelUser::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
        //    if(Hash::check($password,$data->password)){
            if(strcmp($password,$data->password)==0){
                Session::put('id',$data->id);
                Session::put('member_id',$data->member_id);
                Session::put('username',$data->username);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('login')->with('alert','Incorect username or password!');
            }
        }
        else{
            return redirect('login')->with('alert','Incorect username or password!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','You are logged out');
    }
}

