<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<canvas class="my-4 w-100" id="myChart" width="900" height="20"></canvas>
      <h1>Matching result</h1>
      <br><br>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company Name</th>
              <th>Contact Email</th>
              <th>Company Address</th>
              <th>Salary <span class="text-muted"> /month</span></th>
            </tr>
          </thead>
          <tbody>
          @for($i = 0; $i <= 1; $i++)
          <tr>
              <td>{{Session::get('searchresult'.$i)[0][0]}}</td>
              <td>{{Session::get('searchresult'.$i)[0][1]}}</td>
              <td>{{Session::get('searchresult'.$i)[0][2]}}</td>
              <td>{{Session::get('searchresult'.$i)[0][3]}}</td>
              <td>{{Session::get('searchresult'.$i)[0][4]}}</td>
          </tr>
          @endfor
          </tbody>
        </table>
      </div>

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection