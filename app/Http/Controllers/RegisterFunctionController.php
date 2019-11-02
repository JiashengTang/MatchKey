<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VerifyUser;
use App\Userinfos;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DB;

class RegisterFunctionController extends Controller
{
    public function verifyUser($token)
    {
      $verifyUser = VerifyUser::where('token', $token)->first();
      if(isset($verifyUser) ){
        $user = $verifyUser->user;
        if(!$user->verified) {
          $verifyUser->user->verified = 1;
          $verifyUser->user->save();
          $status = "Your e-mail is verified. You can now login.";
        } else {
          $status = "Your e-mail is already verified. You can now login.";
        }
      } else {
        return redirect('/')->with('warning', "Sorry your email cannot be identified.");
      }
      return redirect('/')->with('status', $status);
    }

    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'confirmpassword'=>'required',
            'email'=>'email:rfc,dns'
        ]);
        // check whether username exsit
        $username=$request->input('username');
        $password=$request->input('password');
        $confirmpassword=$request->input('confirmpassword');
        $email=$request->input('email');
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $address=$request->input('address');
        $age=$request->input('age');
        $jorr=$request->input('jorr');

        if($password==$confirmpassword)
        {
        $userinfos =DB::select("select * from userinfos where username='$username'");
        $IDList = array_column($userinfos, 'id');
        $UsernameList = array_column($userinfos, 'username');
        $PasswordList = array_column($userinfos, 'password');
        $EmailList =  array_column($userinfos, 'email');
        $arrayCount = count($userinfos);
        if($arrayCount>0)
        {
            return redirect('/register')->with('wrong','User Name has already exist');
        }
        else{
        //save to database
        $message = new Userinfos;
        $message->username = $request->input('username');
        $message->password = $request->input('password');
        $message->email = $request->input('email');
        $message->firstname = $request->input('firstname');
        $message->lastname = $request->input('lastname');
        $message->address = $request->input('address');
        $message->age = $request->input('age');
        $message->jorr = $request->input('jorr');
        $message->save();

        $email=$message->email;
        $data = array('name'=>"Our Code World");
        // Path or name to the blade template to be rendered
        $template_path ='register';
        $request->session()->put('rorf', 'r');
        $request->session()->put('registeruername', $request->input('username'));
        $verifyUser = VerifyUser::create([
            'user_id' => $message->id,
            'token' => sha1(time())
          ]);
        $data=$verifyUser;
        Mail::to($message->email)->send(new Sendmailable($data));
        // Mail::send($template_path, $data, function(Request $request, b $message) {
        //     // Set the receiver and subject of the mail.
        //     $message->to('s3557899@student.rmit.edu.au')->subject('Laravel HTML Mail');
        //     // Set the sender
        //     $message->from('s3557899@student.rmit.edu.au','Our Code World');
        // });

        //Mail::to($message->email)->send(new SendMailable($data));
        return redirect('/')->with('success','Registe successful, Please check your email to verify.');
        }
    }
    else
    {
        return redirect('/register')->with('wrong','Password and confirm password are different');
    }
    }
}
