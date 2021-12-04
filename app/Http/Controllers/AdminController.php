<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
    public function projects()
    {
        return view('admin.project');
    }
    public function blogs()
    {
        return view('admin.blogs');
    }
    public function subscribers()
    {
        return view('admin.subscribers');
    }
}
