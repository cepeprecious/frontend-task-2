@extends('layouts.app')

@section('title', 'Careers 2')

<!-- Content -->
@section('content')

    <div class="header-filler"></div>

    <div class="careers2-container container-fluid d-flex justify-content-center">
        <div class="box-container bg-white border border-dark rounded-5 text-black">
            <div>
                <h1 class="fs-1 fw-bold">Sales Manager</h1>
                <p class="fw-bold" style="color: #c70039">Emobile Matrix and Logistics Corporation</p>
            </div>
            <div class="">
                <p class="fw-bold">Quezon City, Philippines</p>
                <div class="d-flex gap-3 mb-4">
                    <i class="fa-solid fa-briefcase p-2" style="background: rgb(243, 242, 242)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                    <i class="fa-solid fa-briefcase p-2" style="background: rgb(243, 242, 242)"> <span class="ps-1 fw-semibold"> Monday - Friday</span></i>
                </div>
            </div>
            <div class="bg-dark my-5" style="height: 2px"></div>
            <div class="px-2">
                <h2 class="fs-2 fw-bold mb-4">Job Description</h2>
                <p class="fs-4 mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <h3 class="fs-2 fw-bold mb-4">Qualification</h3>
                <p class="fs-4 mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <h4 class="fs-2 fw-bold mb-4">Requirements</h4>
                <p class="fs-4 mb-5">Lorem ipsum dolor sit amet, consectetur. Ut enim ad minim veniam, quis nostrud.</p>
                <h5 class="fs-2 fw-bold mb-4">Location</h5>
                <p class="fs-4 mb-5">Quezon City, Philippines</p>
                <button type="button" class="btn button-1 py-3 px-5 me-5 fs-5 fw-bold" style="background: #c70039; color: white" data-bs-toggle="modal" data-bs-target="#jobApplicationModal">
                    Apply Now
                </button>
                <button type="button" class="btn button-2 py-3 px-4 fs-5 fw-bold" style="border: solid #c70039 thin" data-bs-toggle="modal" data-bs-target="#jobApplicationModal">
                    Send Resume through Gmail <img src="https://img.icons8.com/fluency/25/null/gmail-new.png"/>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="jobApplicationModal" tabindex="-1" role="dialog" aria-labelledby="jobApplicationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Job Application Form -->
                    <div class="px-3">
                        <h1 class="mb-4 mt-4 fw-bold">Job Application Form</h1>
                    </div>
                    <div class="bg-dark mb-3" style="height: 2px"></div>
                    <div class="px-2">
                        <p class="fw-bold mb-5">Thank you for your interest in working with us. Please check below for available
                            job opportunities that meets your criteria and send your application by filling up the form 
                        </p>
                        <form>
                            <div class="form-group">
                                <select class="form-control" id="exampleSelect" placeholder="WHAT POSITION ARE YOU APPLYING FOR? *" required>
                                    <option disabled selected value="">WHAT POSITION ARE YOU APPLYING FOR? *</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="FIRST NAME *" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="LAST NAME *" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="phone" placeholder="PHONE NO. *" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS *" required>
                            </div>
                            <div class="ps-3" style="color: solid #828486;">
                                <p class="mt-5 fw-bold">WHAT IS YOUR CURRENT EMPLOYMENT STATUS *</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        EMPLOYED
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        SELF-EMPLOYED
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        UNEMPLOYED
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        STUDENT
                                    </label>
                                </div>
                                <p class="mt-4 fw-bold">UPLOAD RESUME *</p>
                                <input type="file" id="formFile" class="mb-2">
                                <p class="fst-italic">*Upload your resume or any other relevant file. Max. file size: 50mb</p>
                                {{-- <div class="mt-5">
                                    <input type="submit" class="btn btn-primary py-3 px-5 fs-5">
                                </div> --}}
                                <button type="button" class="btn button-1 py-3 px-5 me-5 mt-5 fs-5 fw-bold" style="background: #c70039; color: white; border-radius: 10px">
                                    Submit
                                </button>
                            </div>
                        </form>
                        <!-- End Job Application Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/careers.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection