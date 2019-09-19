<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Good Day!</h1>
      <p> Match key is a web based matching system in order to match jobs required by employers according to the skills of potential employees. It is implemented especially for the job seeker and the job recruiter. The job seeker allows to upload the resume on the website. The job recruiter will post the job vacancy on the website. This helps the system to match the job resume with the job vacancy requirements and alert the job recruiter with the details of the job seeker.</p>
      <p><a class="btn btn-primary btn-lg" href="https://drive.google.com/drive/u/0/folders/1j_Imh6W9-ThVjahib_Tf55oNmYMCsVYE" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        <h2>I'm a job-seeker</h2>
        <p>Job-seeker can use matching system to match job by their selection</p>
        <p><a class="btn btn-primary" href="/seekersearch" role="button">Go to Search page &raquo;</a></p>
      </div>
      <div class="col-md-6">
        <h2>I'm a recruiter</h2>
        <p>Recruiter can upload requirements for the role they want</p>
        <p><a class="btn btn-primary" href="/recruiterpost" role="button">Go to Post page &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div>
@endsection