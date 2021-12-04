<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Mail\SendMail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('home.about');
    }
    public function blog()
    {
        return view('home.blog');
    }

    //conatct us
    public function contact()
    {
        return view('home.contact');
    }
    public function store_subscribers(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'email' => 'required|email|unique:subscribers',
        ],[
            'required'=>'Email field is required!',
            'email'=>'Please enter valid email!',
            'unique'=>'Your already subscribed! Thank you!'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 200);
        }

        $data['email'] = $request->email;
        $data['created_at'] = date('Y-m-d H:i:s');
        $result = DB::table('subscribers')->insert($data);
        if($result){
            \Mail::to($request->email)->send(new SendMail);
            if(!\Mail::failures()){
                return response()->json(['status'=>"Your Successfully Subscribed! Thank you!",'type'=>'success'], 200);
            } else{
                return response()->json(['status'=>"Failed! Try Again",'type'=>'error'], 200);
            }
        } else {
            return response()->json(['status'=>"Failed! Try Again",'type'=>'error'], 200);
        }
    }
    public function store_feedback(Request $request)
    {

        $validator = \Validator::make($request->all(),[
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 200);
        }

        $data['full_name'] = $request->full_name;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['created_at'] = date('Y-m-d H:i:s');

        $result = DB::table('feedback')->insert($data);

        if($result){
            return response()->json(['success'=>"Successfully Submitted!"], 200);
        } else {
            return response()->json(['failed'=>"Failed! Try Again"], 200);
        }

    }
    public function project()
    {
        return view('home.project');
    }
}
