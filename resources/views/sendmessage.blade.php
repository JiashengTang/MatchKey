<!DOCTYPE html>
@extends('layouts.app')

@section('content')
@if(Session::get('recruiterid'))
	<div  style="margin-left: 50px;margin-top: 50px;">

		<h1>Send Message {{Session::get('recruiterid')}}</h1>
		{!! Form::open(['url'=> 'sendmessage/submit'])!!}
		<div class="form-group" style="width: 600px;">
			{{Form::label('title','Title')}}
			{{Form::text('title','',['class'=> 'form-control','placeholder'=>'Enter Title'])}}
		</div>
		<div class="form-group" style="width: 600px;">
			{{Form::label('message','Message')}}
			{{Form::textarea('message','',['class'=> 'form-control','placeholder'=>'Enter Message'])}}
		</div>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		{!!Form::close()!!}
	</div>
@endif
@endsection