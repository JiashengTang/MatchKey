<!DOCTYPE html>
@extends('layouts.app')

@section('content')
	<div  style="margin-left: 50px;margin-top: 50px; height=100%;">
		<h1>Match Key</h1>
		<br>
		<br>
		{!! Form::open(['url'=> 'register/submit'])!!}
		<div class="form-group" style="width: 400px;">
			{{Form::label('username','Username')}}
			{{Form::text('username','',['class'=> 'form-control','placeholder'=>'Enter name'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('password','Password')}}
			{{Form::text('password','',['class'=> 'form-control','placeholder'=>'Enter Password'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('confirmpassword','ConfirmPassword')}}
			{{Form::text('confirmpassword','',['class'=> 'form-control','placeholder'=>'Enter ConfirmPassword'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('email','E-mail')}}
			{{Form::text('email','',['class'=> 'form-control','placeholder'=>'example@example.com'])}}
		</div>
		<br>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		{!!Form::close()!!}
	</div>
@endsection