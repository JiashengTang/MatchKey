<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobseeker;
use DB;
use Illuminate\Support\Str;

class seekersearchFunctionController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'jobtype'=>'required',
            'city'=>'required',
            'education'=>'required',
            'experience'=>'required',
            'salaryrange'=>'required'
        ]);
        $jobtype=$request->input('jobtype');
        $city=$request->input('city');
        $education=$request->input('education');
        $experience=$request->input('experience');
        $salaryrange=$request->input('salaryrange');
        $resultJobTypeMatch =DB::select("SELECT * FROM jobseekers where jobtype = '$jobtype'");
        $data = serialize($resultJobTypeMatch);

        $IDList = array_column($resultJobTypeMatch, 'id');
        $CompanyNameList=array_column($resultJobTypeMatch, 'companyname');
        $EmailList=array_column($resultJobTypeMatch, 'email');
        $AddressList=array_column($resultJobTypeMatch, 'address');
        $SalaryList = array_column($resultJobTypeMatch, 'salaryrange');
        $EducationList = array_column($resultJobTypeMatch, 'education');
        $ExperienceList = array_column($resultJobTypeMatch, 'experience');
        $CityList = array_column($resultJobTypeMatch, 'city');

        $arrayCount = count($resultJobTypeMatch);
        $MatchCount = 0;
        $TotalMatch = 0;

        for ($i=0; $i<=($arrayCount-1); $i++){
            $MatchCount=0;
            if (($i+1)==$IDList[$i]){
              if ($salaryrange==$SalaryList[$i]){
                $MatchCount++;
              }
              if ($education==$EducationList[$i]){
                $MatchCount++;
              }
              if ($experience==$ExperienceList[$i]){
                $MatchCount++;
              }
              if ($city==$CityList[$i]){
                $MatchCount++;
              }
              if ($MatchCount>=3){
                echo "Company ID ",$IDList[$i]," match your requirement.<br>";
                echo "This Company require ",$SalaryList[$i]," /month income, <br>
                The Company name is ", $CompanyNameList[$i], " <br>
                And contact email is  ", $EmailList[$i], " <br>
                And Company address is ", $AddressList[$i], " .<br><br>";
                $TotalMatch++;
              }
            }
          }
          if ($TotalMatch==0){
            echo "Sorry there are no person match your requirment.";
          }

        //return $IDList;
    }
}
