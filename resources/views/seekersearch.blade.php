<!DOCTYPE html>
@extends('layouts.app')

@section('content')
  </head>
  <body class="bg-light">
  <div class="py-5">
    <h2>Matching Selection</h2>
    <p class="lead">Please complete the following things to continue the match function</p>
  </div>
  {!! Form::open(['url'=> 'seekersearch/submit'])!!}
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Matching Details</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('education','Your education level')}}
          {{Form::select('education', array('Collage' => 'Collage', 'Highschool' => 'High school','None'=>'None'), 'Collage',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('jobtype','Job Type you are looking for')}}
          {{Form::select('jobtype', array('IT' => 'IT', 'Business' => 'Business'), 'IT',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
          {{Form::label('jocitybtype','City you perfer')}}
            {{Form::select('city', array('Melbourne' => 'Melbourne', 'Sydney' => 'Sydney'), 'Melbourne',['class'=>'custom-select d-block w-100'])}}
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('experience','Working experience you have')}}
            {{Form::select('experience', array('0' => '0 years', '1' => '1-2 years','2' => '2-5 years','5' =>'5+ years'), '0',['class'=>'custom-select d-block w-100'])}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            {{Form::label('salaryrange','Salary')}}<span class="text-muted"> /month</span>
			      {{Form::select('salaryrange',array('0' => '0-1 k', '1000' => '1-2 k','2000' => '2-5 k','5000' =>'5+ k'), '0',['class'=>'custom-select d-block w-100'])}}
            </div>
        </div>

        <hr class="mb-4">
        {{Form::submit('Continue to Search',['class'=>'btn btn-primary'])}}
      </form>
      {!!Form::close()!!}
    </div>
@endsection