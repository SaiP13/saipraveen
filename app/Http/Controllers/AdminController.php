<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    public function index()
    {

        // dd(Auth::user()->user_name);
        if(Auth::check()){
            return view('admin.index');
        }
        return redirect("login");
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
    public function profile()
    {
        return view('admin.profile');
    }
}
