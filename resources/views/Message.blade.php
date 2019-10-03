<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<div  style="margin-left: 50px;margin-top: 50px; ">
<br>
    <h1>Message Center</h1>
    <br>
<br>
@if(Session::get('userData'))
    <div class="container" style="height:100%;";>
    <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>In-box</h2>
                <p>Message you have received are all in here<br>Please check here regularly<br> </p>
                <br>
                <button type="submit"  onclick="location.href='{{ url('inbox') }}'" class="btn btn-block btn-primary">In-box</button>
            </div>
            <div class="col-md-6">
                <h2>Sent Message</h2>
                <p>Message you have sent are all in here<br>If you want to check what you have sent<br>You can go to here to check the message</p>
                <button type="submit"  onclick="location.href='{{ url('sent') }}'" class="btn btn-block btn-primary">Sent Message</button>
            </div>
        </div>
        <br><br><br>
    </div>




@else
        <h4>Please Login first !</h4>
        <h4>Please click <a href="/">login</a> to go back to login page.</h4>
        <br><br>
        <h4>If you don't have an account</h4>
        <h4>Please click <a href="/register">register</a> to register a new account.</h4>
@endif
</div>  
<br><br><br>
<br><br><br>
@endsection