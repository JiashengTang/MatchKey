<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
class SearchFunctionController extends Controller
{
    public function submit(Request $request){
        $username=$request->input('username');
        $userinfos =DB::select("select * from userinfos where username='$username'");
        return view('adminview/show-all-user')->with('userinfos',$userinfos);
    }
}
