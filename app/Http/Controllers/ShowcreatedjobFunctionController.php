<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobseeker;
use DB;
use Illuminate\Support\Str;
class ShowcreatedjobFunctionController extends Controller
{
    public function getalljobinfo(Request $request){
        //$username='username';
        //$userinfos = DB::select("select password from userinfos where username=$username");
        $userid=$request->session()->get('userid');
        $jobseekers = DB::select("SELECT * FROM jobseekers where userid = '$userid'");
        return view('createdjob')->with('jobseekers',$jobseekers);
    }
    public function geteditjobinfo(Request $request,$jobId){
        $job=$jobId;
        $data =DB::select("SELECT * FROM jobseekers where id = '$job'");
        $request->session()->put('editjobid', $job);
		return view('editjobs')->with('data',$data);
    }
    public function submit(Request $request){
        $this->validate($request,[
            'companyname'=>'required',
            'email'=>'required',
            'address'=>'required',
            'jobtype'=>'required',
            'city'=>'required',
            'education'=>'required',
            'experience'=>'required',
            'salaryrange'=>'required'
        ]);
        $jobId=$request->session()->get('editjobid');
        $companyname = $request->input('companyname');
        $userid = $request->session()->get('userid'); 
        $email = $request->input('email');
        $address = $request->input('address');
        $jobtype = $request->input('jobtype');
        $city = $request->input('city');
        $education = $request->input('education');
        $experience = $request->input('experience');
        $salaryrange = $request->input('salaryrange');
        DB::update('update jobseekers set companyname = ? where id = ?',[$companyname,$jobId]);
        DB::update('update jobseekers set userid = ? where id = ?',[$userid,$jobId]);
        DB::update('update jobseekers set address = ? where id = ?',[$address,$jobId]);
        DB::update('update jobseekers set email = ? where id = ?',[$email,$jobId]);
        DB::update('update jobseekers set jobtype = ? where id = ?',[$jobtype,$jobId]);
        DB::update('update jobseekers set salaryrange = ? where id = ?',[$salaryrange,$jobId]);
        DB::update('update jobseekers set education = ? where id = ?',[$education,$jobId]);
        DB::update('update jobseekers set experience = ? where id = ?',[$experience,$jobId]);
        DB::update('update jobseekers set city = ? where id = ?',[$city,$jobId]);
        
        return redirect('/created')->with('success','Saved successful');


    }
}
