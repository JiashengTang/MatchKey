<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobseeker;

class RecruiterpostFunctionController extends Controller
{
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
        //save to database
        $message = new jobseeker;
        $message->companyname = $request->input('companyname');
        $message->email = $request->input('email');
        $message->address = $request->input('address');
        $message->jobtype = $request->input('jobtype');
        $message->city = $request->input('city');
        $message->education = $request->input('education');
        $message->experience = $request->input('experience');
        $message->salaryrange = $request->input('salaryrange');
        $message->save();

        // Path or name to the blade template to be rendered
        $template_path ='recruiterpost';

        return redirect('/user')->with('success','Check-in successful');
    }
}
