<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div  style="margin-left: 50px;margin-top: 50px; height=100%;">
<br>
    <h1>Created Job List</h1>
    <br>
<br>
@if(Session::get('userData'))
    @if($jobseekers)
        @foreach($jobseekers as $U)
            <ul class="list-group">
              <li class="list-group-item">Job Description: {{$U->companyname}}</li>
              <li class="list-group-item">Company Address: {{$U->address}}</li>
              <li class="list-group-item">Contract email: {{$U->email}}</li>
              <li class="list-group-item">Job Type applied: {{$U->jobtype}}</li>
              <li class="list-group-item">Salary Range: {{$U->salaryrange}}</li>
              <li class="list-group-item">Education Required: {{$U->education}}</li>
              <li class="list-group-item">Experience Required: {{$U->experience}}</li>
              <li class="list-group-item">City : {{$U->city}}</li>
            </ul>
            <a href="{{url('/editjobs/get/' . $U->id)}}" class="btn m-btn--pill    btn-outline-primary" title="View">
                          <i class="la la-trash">Edit</i>
                          </a>
            <br><br>
        @endforeach
    @else
        <h4>You don't have any Created Job !</h4>
        <h4>Please Create a job AD first !</h4>
        <h4>Please click <a href="/recruiterpost">Create</a> to go create a job AD.</h4>
    @endif
@else
        <h4>Please Login first !</h4>
        <h4>Please click <a href="/">login</a> to go back to login page.</h4>
        <br><br>
        <h4>If you don't have an account</h4>
        <h4>Please click <a href="/register">register</a> to register a new account.</h4>
@endif
</div>
@endsection