<!DOCTYPE html>
@extends('layouts.app')

@section('content')
	<div  style="margin-left: 50px;margin-top: 50px;">
		<h1>Enter Verification Code</h1>
		{!! Form::open(['url'=> 'enterverificationcode/submit'])!!}
        <br>
        <br>
		<div class="form-group" style="width: 400px;">
			{{Form::label('verificationcode','Please enter your Verification code')}}
			{{Form::text('verificationcode','',['class'=> 'form-control','placeholder'>'Enter Verification Code'])}}
		</div>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		{!!Form::close()!!}
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
@endsection