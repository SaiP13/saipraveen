<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;
use Validator;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function login_action(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 200);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('admin')->withSuccess('Logged-in');

        } else {
            return response()->json(['status'=>"Invalid Creditinals!"], 200);
        }


    }
    public function register()
    {
        return view('auth.register');
    }
    public function register_action(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 200);
        }

        $data['name'] = $request->first_name." ".$request->last_name;
        $data['email'] = $request->email;
        $data['password'] = \Hash::make($request->password);

        $result = User::create($data);

        if($result)
        {
            return response()->json(['status'=>"Successfully Registered!"], 200);
        }


    }
    public function forgot_password()
    {
        return view('auth.forgot-password');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');

    }
}
