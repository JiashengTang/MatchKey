<!DOCTYPE html>
@extends('layouts.app')

@section('content')
</head>
  <body class="bg-light">
  <div class="py-5">
    <h2>Matching Check-in</h2>
    <p class="lead">Please complete the following things to finish the check-in function</p>
  </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Company Details</h4>
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
        <div class="row">
            <div class="col-md-8 mb-3">
                <label for="CompanyName">Company Name </label>
                <input type="text" class="form-control" id="CompanyName" placeholder="" value="" required>
                <div class="invalid-feedback">
                Valid Company name is required.
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
          <div class="col-md-6 mb-3">
            <label for="jobtype">Job Type required</label>
            <select class="custom-select d-block w-100" id="jobtype" required>
              <option value="">Choose...</option>
              <option>IT</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Job Type.
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="city">City required</label>
                <select class="custom-select d-block w-100" id="city" required>
                <option value="">Choose...</option>
                <option>California</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid City.
                </div>
            </div>
        </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="education">Education</label>
            <select class="custom-select d-block w-100" id="Education" required>
              <option value="">Choose...</option>
              <option>Collage</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Education.
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="experience">Working experience required</label>
                <select class="custom-select d-block w-100" id="experience" required>
                <option value="">Choose...</option>
                <option>0 years</option>
                <option>1-2 years</option>
                <option>2-5 years</option>
                <option>5-10 years</option>
                <option>10+ years</option>
                </select>
                <div class="invalid-feedback">
                Please provide a valid experience.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Salary">Salary</label>
                <input type="text" class="form-control" id="CompanyName" placeholder="" value="" required><span class="text-muted">/month</span>
                <div class="invalid-feedback">
                Please provide a valid state.
                </div>
            </div>
        </div>



        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">I confirm that company details and check-in details are vaild</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Check-in</button>
      </form>
    </div>
@endsection