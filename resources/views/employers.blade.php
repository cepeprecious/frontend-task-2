@extends('layouts.app')

@section('title', 'Employers')

<!-- Content -->
@section('content')

    <div class="header-filler"></div>

    <div class="employers-container container-fluid justify-content-center">
        <div class="box-container bg-white shadow rounded-5 text-black">
            <div class="px-2">
                <p class="fw-bold">Fill up all the required fields for your manpower request to be processed.</p>
                <h2 class="my-5 fw-bold" style="text-decoration-line: underline;text-decoration-thickness: 2px;text-underline-offset: 8px;">Business Details</h2>
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 input-1">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Business Name *" id="formGroupExampleInput">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Business Address *" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 input-1">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Business Name *" id="formGroupExampleInput">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Business License No. *" id="formGroupExampleInput">
                    </div>
                </div>
            </div>
            <div class="bg-dark my-5" style="height: 3px"></div>
            <div class="">
                <h2 class="my-5 fw-bold" style="text-decoration-line: underline;text-decoration-thickness: 2px;text-underline-offset: 8px;">Contact Information</h2>
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 input-1">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Contact Person *" id="formGroupExampleInput">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Position *" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 input-1">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Tel. No. *" id="formGroupExampleInput">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Email *" id="formGroupExampleInput">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Website" id="formGroupExampleInput">
                    </div>
                </div>
            </div>
            <div class="bg-dark my-5" style="height: 3px"></div>
            <div class="">
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 input-1">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="Position *" id="formGroupExampleInput">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3 p-3" style="max-width: 700px" placeholder="No. Required *" id="formGroupExampleInput">
                    </div>
                    <div class="col-lg-3 col-md-12 d-flex justify-content-center">
                        <button type="button" class="btn py-3 px-5 fs-5 fw-bold" style="background: #c70039; color: white">
                            + Add More
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <textarea type="text" class="form-control form-control-lg border-dark rounded-4 p-3" rows="5" placeholder="Business Name *" id="formGroupExampleInput"></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn py-4 px-5 mt-5 fs-5 fw-bold rounded-3" style="background: #c70039; color: white">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/employers.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection