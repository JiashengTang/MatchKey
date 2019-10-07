<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobseekers;
use DB;
use Illuminate\Support\Str;
class searchresultFunctionController extends Controller
{
    public function submit(Request $request){
        
        return redirect('/sendmessage');
    }
    public function getjobid(Request $request,$jobId){
        $job=$jobId;
        $data =DB::select("SELECT * FROM jobseekers where id = '$jobId'");
        $IDList = array_column($data, 'userid');
        $request->session()->put('toid',$IDList[0]);
		return view('sendmessage')->with('job',$job);
	}
}
