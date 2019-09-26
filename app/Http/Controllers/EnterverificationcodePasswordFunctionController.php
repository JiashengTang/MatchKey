<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
class EnterverificationcodePasswordFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'verificationcode'=>'required'
        ]);
        $verificationcode=$request->input('verificationcode');
        $data= $verificationcode;
        if($verificationcode==$request->session()->get('randomcode'))
        {
            $request->session()->put('rorf', 'p');
            Mail::to($request->session()->get('forgotpasswordemail'))->send(new Sendmailable($data));
            return redirect('/')->with('success','Email send successful');
        }
        else{
            return redirect('/enterverificationcode')->with('wrong','Wrong Verification Code');
        }
    }
}
