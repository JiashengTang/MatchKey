<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
class AdduserFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'email'=>'required'
        ]);
        //save to database
        $message = new Userinfos;
        $message->username = $request->input('username');
        $message->password = $request->input('password');
        $message->email = $request->input('email');
        $message->save();

        return redirect('/add-user')->with('success','Registe successful');
    }
}
