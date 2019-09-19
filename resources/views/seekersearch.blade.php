<!DOCTYPE html>
@extends('layouts.app')

@section('content')
  </head>
  <body class="bg-light">
  <div class="py-5">
    <h2>Matching Selection</h2>
    <p class="lead">Please complete the following things to continue the match function</p>
  </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Personal Details</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name </label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Contact Email </label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="education">Education</label>
            <select class="custom-select d-block w-100" id="education" required>
              <option value="">Choose...</option>
              <option>Collage</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid education.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="jobtype">Job Type</label>
            <select class="custom-select d-block w-100" id="jobtype" required>
              <option value="">Choose...</option>
              <option>IT</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid jobtype.
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="City">City</label>
                <select class="custom-select d-block w-100" id="City" required>
                <option value="">Choose...</option>
                <option>California</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="experience">Working experience</label>
                <select class="custom-select d-block w-100" id="experience" required>
                <option value="">Choose...</option>
                <option>0 years</option>
                <option>1-2 years</option>
                <option>2-5 years</option>
                <option>5-10 years</option>
                <option>10+ years</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="Salary">Salary Range</label>
                <select class="custom-select d-block w-100" id="Salary" required>
                <option value="">Choose...</option>
                <option>1k-2k/month</option>
                <option>2k-5k/month</option>
                <option>5k-10k/month</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
        </div>



        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">I confirm that my personal details are correct</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Search</button>
      </form>
    </div>
@endsection