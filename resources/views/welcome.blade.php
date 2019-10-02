<!DOCTYPE html>
@extends('layouts.app')

@section('content')
	<div  style="margin-left: 50px;margin-top: 50px;">
		<h1>Match Key</h1>
		{!! Form::open(['url'=> 'welcome/submit'])!!}
		<div class="form-group" style="width: 400px;">
			{{Form::label('username','Username')}}
			{{Form::text('username','',['class'=> 'form-control','placeholder'=>'Enter name'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('password','Password')}}
			{{Form::password('password',['class'=> 'form-control','placeholder'=>'Enter Password'])}}
		</div>
		<a class="nav-link" href="/forgotpw">Forget Password?</a>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		{!!Form::close()!!}
	</div>
@endsection