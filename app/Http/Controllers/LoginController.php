<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {        
        if(Session::get('login')){
            if(Session::get('role') == 'user'){
                return redirect('user/dashboard');
            }
            if(Session::get('role') == 'admin'){
                return redirect('admin/dashboard');
            }            
        }
        else{
            return view('login.login_user');            
        }
    }

    public function login_user(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){
            if(md5($password) == $data->password){
                Session::put('id',$data->id);
                Session::put('login',TRUE);
                Session::put('nama',$data->name);
                Session::put('role','user');
                Session::put('photo',$data->photo);
                return redirect('user/dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }        
    }

    public function login_admin(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = Admin::where('email',$email)->first();
        if($data){
            if(md5($password) == $data->password){
                Session::put('id',$data->id);
                Session::put('login',TRUE);
                Session::put('nama',$data->name);
                Session::put('role','admin');
                return redirect('admin/dashboard');
            } else {
                return redirect('admin');
            }
        } else {
            return redirect('admin');
        }        
    }   
}
