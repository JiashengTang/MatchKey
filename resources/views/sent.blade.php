<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<br><br>
<h1>{{Session::get('userData')}}'s Sent Message</h1>
<br><br>
@if($sent!=NULL)
        @if(Session::get('jorr')=="j")
            @foreach($sent as $U)
            <ul class="list-group">
              <li class="list-group-item">Title: {{$U->title}}</li>
              <li class="list-group-item">To Company Name: {{$U->companyname}}</li>
              <li class="list-group-item">Company Address: {{$U->companyaddress}}</li>
              <li class="list-group-item">Contract email: {{$U->companyemail}}</li>
              <li class="list-group-item">Job Type applied: {{$U->jobtype}}</li>
              <li class="list-group-item"> {{$U->message}}</li>
            </ul>
            <br><br>
            @endforeach
        @elseif(Session::get('jorr')=="r")
        @foreach($sent as $U)
            <ul class="list-group">
              <li class="list-group-item">Title: {{$U->title}}</li>
              <li class="list-group-item">To Applicant Name: {{$tousername}}</li>
              <li class="list-group-item">Apply Company Name: {{$U->companyname}}</li>
              <li class="list-group-item">Applicant Contract email: {{$U->senderemail}}</li>
              <li class="list-group-item">Job Type apply: {{$U->jobtype}}</li>
              <li class="list-group-item"> {{$U->message}}</li>
            </ul>
            <br><br>
            @endforeach
        @endif
@else
<br><br>
  <h3> There is no message received</h3>
  <h4>Please click <a href="/message">here</a> to go back.</h4>
@endif
@endsection