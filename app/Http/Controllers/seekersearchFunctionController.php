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
        //$data = serialize($resultJobTypeMatch);

        $IDList = array_column($resultJobTypeMatch, 'id');
        $CompanyNameList=array_column($resultJobTypeMatch, 'companyname');
        $EmailList=array_column($resultJobTypeMatch, 'email');
        $AddressList=array_column($resultJobTypeMatch, 'address');
        $SalaryList = array_column($resultJobTypeMatch, 'salaryrange');
        $EducationList = array_column($resultJobTypeMatch, 'education');
        $ExperienceList = array_column($resultJobTypeMatch, 'experience');
        $CityList = array_column($resultJobTypeMatch, 'city');

        $arrayCount = count($resultJobTypeMatch);

        $searchresultcount=$arrayCount-1;//session result count
        $request->session()->push('searchresultcount', $searchresultcount);

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
                //save data into session
                $searchresult=collect([$IDList[$i],$CompanyNameList[$i],$EmailList[$i],$AddressList[$i],$SalaryList[$i],$EducationList[$i],$ExperienceList[$i],$CityList[$i]]);
                $request->session()->push('searchresult'.$i, $searchresult);
                $TotalMatch++;
              }
            }
          }
          $request->session()->push('totalmatch', $TotalMatch);
          return redirect('/user')->with('success','Information saved successful');
          

        //return $IDList;
    }
}
