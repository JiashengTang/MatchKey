<!DOCTYPE html>
@extends('layouts.app')

@section('content')
	<div  style="margin-left: 50px;margin-top: 50px;">
		<h1>Send Message {{$job}}</h1>
		{!! Form::open(['url'=> 'sendmessage/submit'])!!}
		{{Session::put('jobid',$job)}}
		@if(Session::get('reply'))
		{{Session::put('toid',$sendid)}}
		<div class="form-group" style="width: 600px;">
			{{Form::label('title','Title')}}
			{{Form::text('title','RE: '.$title,['class'=> 'form-control','placeholder'=>'Enter Title'])}}
		</div>
		<div class="form-group" style="width: 600px;">
			{{Form::label('message','Message')}}
			{{Form::textarea('message','',['class'=> 'form-control','placeholder'=>'Enter Message'])}}
		</div>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		@else
		{{Session::put('jobid',$job)}}
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
		@endif
		{!!Form::close()!!}
	</div>
@endsection