<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class RegisterFunctionController extends Controller
{
    public function submit(Request $request){
            $validator  = $request->validate([
            'username'=>'required|unique',
            'password'=>'required',
            'confirmpassword'=>'required',
            'email'=>'required'
        ]);
        //save to database
        $message = new Userinfos;
        $message->username = $request->input('username');
        $message->password = $request->input('password');
        $message->email = $request->input('email');
        $message->save();

        $data=$message->username;
        $email=$message->email;
        $data = array('name'=>"Our Code World");
        // Path or name to the blade template to be rendered
        $template_path ='register';

        Mail::to($message->email)->send(new Sendmailable($data));
        // Mail::send($template_path, $data, function(Request $request, b $message) {
        //     // Set the receiver and subject of the mail.
        //     $message->to('s3557899@student.rmit.edu.au')->subject('Laravel HTML Mail');
        //     // Set the sender
        //     $message->from('s3557899@student.rmit.edu.au','Our Code World');
        // });

        //Mail::to($message->email)->send(new SendMailable($data));
        return redirect('/')->with('success','Registe successful');
    }
}
