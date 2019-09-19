<!DOCTYPE html>
@extends('layouts.app')

@section('content')
	<div  style="margin-left: 50px;margin-top: 50px;">
        <h1>Welcome! Admin</h1>
        <h4>Please select your action</h3>
        <br><br>
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Show all users</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Admin has permission</li>
                        <li>to check the databse </li>
                        <li>include user personal info</li>
                        <li>Not include the password</li>
                        </ul>
                        <button type="button" onclick="location.href='{{ url('show-all-user') }}'" class="btn btn-lg btn-block btn-primary">Show</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Add user</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Admin has permission</li>
                        <li>to add user account by adminend </li>
                        <li>But admin should not add user</li>
                        <li>without a reasonable reason</li>
                        </ul>
                        <button type="submit"  onclick="location.href='{{ url('add-user') }}'" class="btn btn-lg btn-block btn-outline-primary">Add</button>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Search & Edit user</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Admin has permission</li>
                        <li>to search user </li>
                        <li>BUT admin should not edit user info</li>
                        <li>with an unreasonable reasons</li>
                        </ul>
                        <button type="button" onclick="location.href='{{ url('search-user') }}'" class="btn btn-lg btn-block btn-outline-primary">Search/Edit</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Delete user</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Admin has permission</li>
                        <li>to delete user account</li>
                        <li>But admin should not delete user account</li>
                        <li>without a reasonable reason</li>
                        </ul>
                        <button type="button" onclick="location.href='{{ url('delete-user') }}'" class="btn btn-lg btn-block btn-outline-primary">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection