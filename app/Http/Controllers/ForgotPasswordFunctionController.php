<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
class ForgotPasswordFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required'
        ]);
        $username=$request->input('username');
        $userinfos =DB::select("select * from userinfos where username='$username'");

        $IDList = array_column($userinfos, 'id');
        $UserNameList=array_column($userinfos, 'username');
        $EmailList=array_column($userinfos, 'email');
        $AddressList=array_column($userinfos, 'address');
        $PasswordList = array_column($userinfos, 'password');
        $FirstNameList = array_column($userinfos, 'firstname');
        $LastNameList = array_column($userinfos, 'lastname');
        $AgeList = array_column($userinfos, 'age');
        $jorrList = array_column($userinfos, 'jorr');
        $verifiedList= array_column($userinfos, 'verified');

        if($verifiedList==0)
        {
            $randomcode=rand(1000,9999);
            $data= $randomcode;
            $request->session()->put('rorf', 'f');
            $request->session()->put('forgotpassworduername', $username);
            $request->session()->put('senduserpassword', $PasswordList[0]);
            $request->session()->put('randomcode', $randomcode);
            $request->session()->put('forgotpasswordemail', $EmailList[0]);
            Mail::to($EmailList[0])->send(new Sendmailable($data));
            return redirect('/enterverificationcode')->with('success','Email send successful');
        }
        else{
            return redirect('/forgotpw')->with('wrong','Please verify your email address first');
        }
    }
}
