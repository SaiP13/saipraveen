<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {


        // if(Auth::check()){
        //     return view('admin.index');
        // }

        return view('admin.index');

        // return redirect("/")->withSuccess('You are not allowed to access');
    }



}
