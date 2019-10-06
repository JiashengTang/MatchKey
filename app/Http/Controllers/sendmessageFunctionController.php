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
        $message->toid = $request->session()->get('recruiterid');
        $message->jobid = $request->session()->get('jobid');
        $message->message = $request->input('message');
        $message->title = $request->input('title');
        $message->save();
        return redirect('/user')->with('success','Message sent');
    }
}
