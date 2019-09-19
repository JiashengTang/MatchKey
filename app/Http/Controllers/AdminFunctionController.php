<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
class AdminFunctionController extends Controller
{
    public function getuserinfo(){
        //$username='username';
        //$userinfos = DB::select("select password from userinfos where username=$username");
        $userinfos = Userinfos::all();
        return view('adminview/show-all-user')->with('userinfos',$userinfos);
    }
}
