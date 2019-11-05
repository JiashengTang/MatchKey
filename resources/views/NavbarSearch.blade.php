<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<div  style="margin-left: 50px;margin-top: 50px; height:100%;">
<br>
    <h1>Search Result</h1>
    <br>
<br>
@if(Session::get('userData'))

<h4>No searching Result</h4>
<br><br><br>
@else
        <h4>Please Login first !</h4>
        <h4>Please click <a href="/">login</a> to go back to login page.</h4>
        <br><br>
        <h4>If you don't have an account</h4>
        <h4>Please click <a href="/register">register</a> to register a new account.</h4>
@endif
<br><br><br><br>
</div>  
<br><br><br>
<br><br><br>
@endsection