<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMessage;
use DB;
use Illuminate\Support\Str;
class MessageFunctionController extends Controller
{
    public function inbox(Request $request){
        //$username='username';
        $userid=$request->session()->get('userid'); 
        $inbox = DB::select("select * from user_messages  where toid=$userid");
        //$inbox = UserMessage::all();
        return view('inbox')->with('inbox',$inbox);
    }
    public function sent(Request $request){
        //$username='username';
        $userid=$request->session()->get('userid'); 
        $sent = DB::select("select * from user_messages  where sendid=$userid");
        //$inbox = UserMessage::all();
        return view('sent')->with('sent',$sent);
    }
}
