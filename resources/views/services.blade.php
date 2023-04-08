@extends('layouts.app')

@section('title', 'Services')

<!-- Content -->
@section('content')
    <div class="first-container position-relative bg-about container-fluid p-0" style="height: 700px;">
        <img src="{{ asset('/img/careers-bg.png') }}" alt="" class="w-100 h-100">
    </div>

    <section id="services" class="container-fluid" style="background: rgb(255, 254, 254); padding: 100px 0 100px 0">
        <div class="container p-5" style="max-width: 75%;">
            <h1 class="fw-bold fs-1" style="font-family: 'Inter', sans-serif; color: #0c203a; margin-bottom: 60px">Our Services</h1>
            <div class="services-description" style="margin-right: 30%; margin-bottom: 50px">
                <p style="font-family: 'Inter', sans-serif; font-size: 20px; color: #6E789E">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit sed do eiusmod
                    tempor incidunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="shadow">
                        <img src="img/pic-2.png" alt="" style="width: 100%">
                        <div class="box bg-white">
                            <h1 class="title fw-bold mb-3"><a href="">Manufacturing Management System</a></h1>
                            <p class="description mb-4">
                                Lorem ipsum dolor sit amet consectetur dolore magna aliqua.
                            </p>
                            <button type="button" class="btn py-2 px-4 mt-4 fs-5 fw-bold" style="background: #c70039; color: white; border-radius: 10px">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="shadow">
                        <img src="img/pic-3.png" alt="" style="width: 100%">
                        <div class="box bg-white">
                            <h1 class="title fw-bold mb-3"><a href="">Inventory Management System</a></h1>
                            <p class="description mb-4">
                                Lorem ipsum dolor sit amet consectetur dolore magna aliqua.
                            </p>
                            <button type="button" class="btn py-2 px-4 mt-4 fs-5 fw-bold" style="background: #c70039; color: white; border-radius: 13px">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="shadow">
                        <img src="img/pic-4.png" alt="" style="width: 100%">
                        <div class="box bg-white">
                            <h1 class="title fw-bold mb-3"><a href="">Warehouse Management System</a></h1>
                            <p class="description mb-4">
                                Lorem ipsum dolor sit amet consectetur dolore magna aliqua.
                            </p>
                            <button type="button" class="btn py-2 px-4 mt-4 fs-5 fw-bold" style="background: #c70039; color: white; border-radius: 13px">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection