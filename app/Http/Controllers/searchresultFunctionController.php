<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userinfos;
use DB;
use Illuminate\Support\Str;
class searchresultFunctionController extends Controller
{
    public function submit(Request $request){
        
        return redirect('/sendmessage');
    }
}
