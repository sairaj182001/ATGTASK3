<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login() {
        return view('auth.login');
    }
    function register() {
        return view('auth.register');
    }
    function save(Request $request) {
        
        //Validating Requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:8|max:25'
        ]);

        //Inserting data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save) {
            return redirect('/auth/login')->with('success','Your successfully registered! Login Here');
        }
        else {
            return back()->with('fail','Something went wrong, Try again later');
        }
    }
    function check(Request $request)
    {
        //Validating Requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:25'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();
        if(!$userInfo) {
            return back()->with('fail','We dont recognize your Email Address');
        }
        else {
            //Checking Password
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            }
            else {
                return back()->with('fail','Incorrect Password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function dashboard() {
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('admin.dashboard',$data);
    }
}
