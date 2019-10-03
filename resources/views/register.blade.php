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
			{{Form::password('password',['class'=> 'form-control','placeholder'=>'Enter Password'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('confirmpassword','ConfirmPassword')}}
			{{Form::password('confirmpassword',['class'=> 'form-control','placeholder'=>'Enter confirmpassword'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('email','E-mail')}}
			{{Form::text('email','',['class'=> 'form-control','placeholder'=>'example@example.com'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('jorr','Job-seeker or Recruiter')}}
			{{Form::select('jorr', array('j' => 'Job-seeker', 'r' => 'Recruiter'), 'j',['class'=>'custom-select d-block w-100'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('firstname','Firstname')}}
			{{Form::text('firstname','',['class'=> 'form-control','placeholder'=>'Enter FirstName'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('lastname','Lastname')}}
			{{Form::text('lastname','',['class'=> 'form-control','placeholder'=>'Enter Lastname'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('address','Address')}}
			{{Form::text('address','',['class'=> 'form-control','placeholder'=>'Enter Your Address'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('age','Age')}}
			{{Form::number('age','',['class'=> 'form-control','placeholder'=>'Enter Your Age','min'=>'0'])}}
		</div>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		{!!Form::close()!!}
	</div>
@endsection
