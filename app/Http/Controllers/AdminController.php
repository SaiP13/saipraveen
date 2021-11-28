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

    public function strore_subscribers(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'email' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 200);
        }

        $data['email'] = $request->email;
        $data['created_at'] = date('Y-m-d H:i:s');

        $result = DB::table('subscribers')->insert($data);

        if($result){
            return response()->json(['success'=>"Successfully Registered!"], 200);
        } else {
            return response()->json(['failed'=>"Failed! Try Again"], 200);
        }


    }


}
