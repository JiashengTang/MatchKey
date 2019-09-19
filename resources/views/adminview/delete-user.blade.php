<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<h1>  Hi Admin!</h1>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Show</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('show-all-user') }}">
              Show all users <span class="sr-only">(current)</span>
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Add</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('add-user') }}">
              Add user
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Search/Edit</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('search-user') }}">
              Search user
            </a>
          </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Delete</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('delete-user') }}">
              Delete user
            </a>
          </li>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <h2>Delete user</h2>
      <div class="table-responsive">
          <div class="form-group" style="width: 400px;">
            {{Form::label('username','Username')}}
            {{Form::text('username','',['class'=> 'form-control','placeholder'=>'Enter User ID'])}}
          </div>
          <div>
            {{Form::submit('Delete',['class'=>'btn btn-primary'])}}
          </div>
      </div>
    </main>
  </div>
</div>
@endsection