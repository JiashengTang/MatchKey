<!DOCTYPE html>
@extends('layouts.app')

@section('content')
	<div  style="margin-left: 50px;margin-top: 50px;">
		<h1>Forgot Password</h1>
		{!! Form::open(['url'=> 'forgetpw/submit'])!!}
        <br>
        <br>
		<div class="form-group" style="width: 400px;">
			{{Form::label('username','Please enter your Username')}}
			{{Form::text('username','',['class'=> 'form-control','placeholder'=>'Enter name'])}}
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