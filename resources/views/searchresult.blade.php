<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<canvas class="my-4 w-100" id="myChart" width="900" height="20"></canvas>
      <h1>Matching result</h1>
      <br><br>

@if(Session::get('userData'))
        @if($a=Session::get('totalmatch'))
              <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Job Description</th>
                      <th>Contact Email</th>
                      <th>Company Address</th>
                      <th>Job Type</th>
                      <th>Salary <span class="text-muted"> /month</span></th>
                      <th>Send message</th>
                    </tr>
                  </thead>
                  <tbody>
                  @for($i = 0; $i < $a; $i++)
                  <tr>
                      <td>{{$jobid=Session::get('searchresult'.$i)[0][0]}}</td>
                      <td>{{Session::get('searchresult'.$i)[0][2]}}</td>
                      <td>{{Session::get('searchresult'.$i)[0][3]}}</td>
                      <td>{{Session::get('searchresult'.$i)[0][4]}}</td>
                      <td>{{Session::get('searchresult'.$i)[0][9]}}</td>
                      <td>{{Session::get('searchresult'.$i)[0][5]}}</td>
                      <td nowrap>
                          <a href="{{url('/searchresult/get/' . $jobid)}}" class="btn m-btn--pill    btn-outline-primary" title="View">
                          <i class="la la-trash">Apply</i>
                          </a>
                       </td>
                  </tr>
                  @endfor
                  </tbody>
                </table>
              </div>
              <br>
              <p>If you want to change your personal information</p>
              <p>Please click back button</p>
              <p><a class="btn btn-primary" href="/user" role="button">Back &raquo;</a></p>
          @elseif($a==0)
              <h4>There is no matching result</h4>
              <h4>Please click <a href="/user">here</a> to go back to change the personal information.</h4>
          @endif

@else
        <h4>Please Login first !</h4>
        <h4>Please click <a href="/">login</a> to go back to login page.</h4>
        <br><br>
        <h4>If you don't have an account</h4>
        <h4>Please click <a href="/register">register</a> to register a new account.</h4>
@endif
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
{{Session::forget('searchresult')}} 
@endsection