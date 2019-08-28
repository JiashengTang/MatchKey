<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
class RegisterFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required',
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

        return redirect('/')->with('success','Registe successful');
    }
}
