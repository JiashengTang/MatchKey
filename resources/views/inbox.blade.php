<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<br><br>
<h1>{{Session::get('userData')}}'s In-box</h1>
<br><br>
<div class="container-fluid">
  <div class="row">
      <div class="table-responsive">
      @if($inbox)
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>sendid</th>
              <th>toid</th>
              <th>Message</th>
            </tr>
          </thead>

          <tbody>
            @foreach($inbox as $U)
            <tr>
              <td>{{$U->id}}</td>
              <td>{{$U->sendid}}</td>
              <td>{{$U->toid}}</td>
              <td>{{$U->message}}</td>
            </tr>
            @endforeach
          </tbody>

        </table>
        @else
        <br><br>
          <h3> There is no message received</h3>
          <h4>Please click <a href="/message">here</a> to go back.</h4>
          @endif
      </div>
    </main>
    </div>
</div>
@endsection