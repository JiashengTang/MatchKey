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
        $inbox = DB::select("select m.id as id,m.sendid, m.toid, m.title as title, m.message as message,j.email as companyemail, u.email as senderemail,j.jobtype as jobtype,j.address as companyaddress, j.companyname as companyname, CONCAT(u.firstname,' ',u.lastname) AS fullname from user_messages m,userinfos u,jobseekers j where m.sendid=u.id and j.id=m.jobid and m.toid=$userid");
        //$inbox = UserMessage::all();
        return view('inbox')->with('inbox',$inbox);
    }
    public function sent(Request $request){
        //$username='username';
        $userid=$request->session()->get('userid'); 
        $sent = DB::select("select m.sendid, m.toid as toid, m.title as title, m.message as message,j.email as companyemail, u.email as senderemail,j.jobtype as jobtype,j.address as companyaddress, j.companyname as companyname, CONCAT(u.firstname,' ',u.lastname) AS fullname from user_messages m,userinfos u,jobseekers j where m.sendid=u.id and j.id=m.jobid and m.sendid=$userid");
        $data = array_column($sent, 'toid');
        $sentto = $data[0];
        $tousername= DB::select("select CONCAT(u.firstname,' ',u.lastname) AS fullname from userinfos u where u.id=$sentto");
        $data1 = array_column($tousername, 'fullname');
        //$inbox = UserMessage::all();
        return view('sent')->with('sent',$sent)->with('tousername',$data1[0]);
    }
}
