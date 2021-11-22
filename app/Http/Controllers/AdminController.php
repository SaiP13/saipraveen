<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {


        if(Auth::check()){
            return view('admin.index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }



}
