<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<br><br>
<h1>{{Session::get('userData')}}'s recruitment information History</h1>
<br><br>
<div class="container-fluid">
  <div class="row">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company Name</th>
              <th>Address</th>
              <th>email</th>
              <th>job Type</th>
              <th>Salary Range</th>
              <th>Education</th>
              <th>Working experience</th>
              <th>city</th>
            </tr>
          </thead>
          <tbody>
            @foreach($recruitmentinformation as $U)
            <tr>
              <td>{{$U->id}}</td>
              <td>{{$U->companyname}}</td>
              <td>{{$U->address}}</td>
              <td>{{$U->email}}</td>
              <td>{{$U->jobtype}}</td>
              <td>{{$U->salaryrange}}</td>
              <td>{{$U->education}}</td>
              <td>{{$U->experience}}</td>
              <td>{{$U->city}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection