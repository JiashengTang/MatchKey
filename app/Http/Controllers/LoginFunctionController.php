<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
class LoginFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);
        $username=$request->input('username');
        $password=$request->input('password');
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

        //$userinfos=array_flatten($userinfos);
        //$data = array_get($userinfos, 'password.');
        //$data = $userinfos["0"];
        // $data = serialize($userinfos);
        // if(strlen($password)<10)
        // {
        //     $data=Str::substr($data, 47,-4);
        // }
        // else
        // {
        //     $data=Str::substr($data, 48,-4);
        // }
        //$array = ['names' => ['joe' => ['programmer']]];
        //array_forget($array, 'names.joe');
        if($username=="admin" && $password=="admin")
        {
            $request->session()->put('userData', $username);
            return redirect('/admin')->with('success','Login success!');
        }
        else
        {
            if($PasswordList[0]==$password)
            {
                $request->session()->put('jorr', $jorrList[0]);
                $request->session()->put('userData', $username);
                //$output=$request->session()->get('userData');
                return redirect('/user')->with('success','Login success!');
            }
            else{
                //$data="1";
                // return $data;
                // return view('view')->with('messages',$data);
                return redirect('/')->with('wrong','Wrong account or password');
            }
        }
    }

    public function logout(Request $request){
        $request->session()->forget('userData');
        return redirect('/')->with('success','Logout success!');
    }

    //public function getuserinfo(){
        //$username='username';
        //$userinfos = DB::select("select password from userinfos where username=$username");
        //$userinfos = Userinfos::all();
        //return view('view',['userinfos'=>$userinfos]);
        //return view('view',compact('userinfos'));
    //    return view('messages')->with('messages',$userinfo);

    //}
}
