@extends('layouts.app')

@section('title', 'Careers')

<!-- Content -->
@section('content')
    <div class="first-container position-relative bg-about container-fluid p-0" style="height: 700px;">
        <img src="{{ asset('/img/careers-bg.png') }}" alt="" class="w-100 h-100">
    </div>

    {{-- Second Container --}}
    <div class="second-container container-fluid bg-light px-4 px-lg-5">
        <div class="row p-4 p-lg-5 active">
            <h1 class="mt-4" style="font-family: 'Montserrat', sans-serif; font-weight: 700">List of Jobs</h1>
            <div class="col-md-12 col-lg-4 p-4">
                {{-- <img src="/img/pic-2.png" alt="" class="w-100"> --}}
                <div class="text-btn-container p-5 border shadow">
                    <h2 class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Engineering Manager</h2>
                    <p class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex flex-wrap mb-4 gap-3">
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Monday - Friday</span></i>
                    </div>
                    <a href="{{ url('/careers2') }}" class="btn fw-bold px-3 py-3 mt-3" style="background: #c70039; color: white; border-radius: 20px; font-size: 20px">View More Details</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-4">
                <div class="text-btn-container p-5 border shadow">
                    <h2 class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Engineering Manager</h2>
                    <p class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex flex-wrap mb-4 gap-3">
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Monday - Friday</span></i>
                    </div>
                    <a href="{{ url('/careers2') }}" class="btn fw-bold px-3 py-3 mt-3" style="background: #c70039; color: white; border-radius: 20px; font-size: 20px">View More Details</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-4">
                <div class="text-btn-container p-5 border shadow">
                    <h2 class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Engineering Manager</h2>
                    <p class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex flex-wrap mb-4 gap-3">
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Monday - Friday</span></i>
                    </div>
                    <a href="{{ url('/careers2') }}" class="btn fw-bold px-3 py-3 mt-3" style="background: #c70039; color: white; border-radius: 20px; font-size: 20px">View More Details</a>
                </div>
            </div>
        </div>
        <div class="row px-4 pb-4 px-lg-5 pe-lg-5 mb-5 active">
            <div class="col-md-12 col-lg-4 p-4">
                <div class="text-btn-container p-5 border shadow">
                    <h2 class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Engineering Manager</h2>
                    <p class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex flex-wrap mb-4 gap-3">
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Monday - Friday</span></i>
                    </div>
                    <a href="{{ url('/careers2') }}" class="btn fw-bold px-3 py-3 mt-3" style="background: #c70039; color: white; border-radius: 20px; font-size: 20px">View More Details</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-4">
                <div class="text-btn-container p-5 border shadow">
                    <h2 class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Engineering Manager</h2>
                    <p class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex flex-wrap mb-4 gap-3">
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Monday - Friday</span></i>
                    </div>
                    <a href="{{ url('/careers2') }}" class="btn fw-bold px-3 py-3 mt-3" style="background: #c70039; color: white; border-radius: 20px; font-size: 20px">View More Details</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 p-4">
                <div class="text-btn-container p-5 border shadow">
                    <h2 class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Engineering Manager</h2>
                    <p class="mb-4 fs-5" style="font-family: 'Montserrat', sans-serif;">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    <div class="d-flex flex-wrap mb-4 gap-3">
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Full-Time</span></i>
                        <i class="fa-solid fa-briefcase p-2" style="background: rgb(236, 234, 234)"> <span class="ps-1 fw-semibold">Monday - Friday</span></i>
                    </div>
                    <a href="{{ url('/careers2') }}" class="btn fw-bold px-3 py-3 mt-3" style="background: #c70039; color: white; border-radius: 20px; font-size: 20px">View More Details</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="pagination text-center">
                    <a href="#" class="disabled"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/careers.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection