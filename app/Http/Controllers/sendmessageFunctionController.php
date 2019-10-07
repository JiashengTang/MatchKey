<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMessage;
use DB;
use Illuminate\Support\Str;
class sendmessageFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'message'=>'required'
        ]);

        $message = new UserMessage;
        $message->sendid = $request->session()->get('userid');
        $message->toid = $request->session()->get('toid');
        $message->jobid = $request->session()->get('jobid');
        $message->message = $request->input('message');
        $message->title = $request->input('title');
        $message->save();
        return redirect('/user')->with('success','Message sent');
    }

    public function reply(Request $request,$mailid){
        $data =DB::select("SELECT * FROM user_messages where id = '$mailid'");
        $toIDList = array_column($data, 'toid');
        $sendIDList = array_column($data, 'sendid');
        $titleList = array_column($data, 'title');
        $jobidList = array_column($data, 'jobid');
        $request->session()->put('reply','y');
		return view('sendmessage')->with('toid',$toIDList[0])->with('sendid',$sendIDList[0])->with('title',$titleList[0])->with('job',$jobidList[0]);
	}
}
