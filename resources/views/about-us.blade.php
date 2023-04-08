@extends('layouts.app')

@section('title', 'About Us')

<!-- Content -->
@section('content')

    <div class="first-container position-relative bg-about container-fluid p-0" style="height: 700px;">
        <img src="{{ asset('/img/about-bg.png') }}" alt="" class="w-100 h-100">
    </div>

    <section id="about1" class="container-fluid mt-5" style="max-width: 90%">
        <div class="row">
            <div class="col-lg-6 col-md-12 py-3 px-5 about1-text">
                <p class="fs-6 fw-bold" style="color: #3361FF">Get to Know us</p>
                <h1 class="fw-bold mb-4" style="font-family: 'Inter', sans-serif; font-size: 30px">Welcome to Megatekton</h1>
                <p class="lh-lg fs-5 pe-4" style="font-family: 'Inter', sans-serif; text-align: justify">
                    Megatekton is engaged with manufacturing and other services
                    wherein clients across the country get to experience innovative
                    services that helps different international clients manufacture
                    their brands, products and maintain their system to optimum
                    level.
                </p>
                <p class="lh-lg fs-5 pe-4" style="font-family: 'Inter', sans-serif; text-align: justify">
                    We have been part of the manufacturing industry since JRS
                    group of companies was established in 1986. We are one of
                    the leading companies who are continuously innovating from
                    the past decade.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 py-3 pe-0">
                <img src="img/pic-7.png" class="img-fluid" style="height: 100%; width: 100%">
            </div>
        </div>
    </section>   
    

    <section id="about2" class="container-fluid mt-5" style="background: #1F46CD">
        <div class="row">
            <div class="col-md-6 px-0">
                <img src="img/pic-8.png" class="img-fluid" style="height: 450px; width: 100%">
            </div>
            <div class="col-md-6 about2-text" style="color: white; padding-top: 80px; padding-left: 70px; align-items: center">
                <h1 class="fw-bold mb-5" style="font-family: 'Oswald', sans-serif; font-size: 50px; letter-spacing: 2px;">Our Mission</h1>
                <p class="lh-lg fs-4 pe-4" style="font-family: 'Montserrat', sans-serif; font-size: 20px;">
                    To deliver the unparalleled services to our clients and
                    enhance long-term relationships that drives economical results.
                </p>
            </div>
        </div>
    </section>

    <section id="about3" class="container-fluid mt-5" style="max-width: 90%">
        <div class="row">
            <div class="col-md-7 about3-text" style="padding-top: 120px; padding-left: 50px; padding-right: 80px">
                <h1 class="fw-bold mb-5" style="font-family: 'Oswald', sans-serif; font-size: 50px; letter-spacing: 2px;">Core Values</h1>
                <p class="lh-lg fs-4 fw-bold pe-4" style="font-family: 'Montserrat', sans-serif; font-size: 20px;">
                    God-Fearing organization to be an excellent provider
                    that maintains the quality services by having undying
                    commit to guarantees team work.
                </p>
            </div>
            <div class="col-md-5 py-3 pe-0">
                <img src="img/pic-9.png" class="img-fluid" style="height: 500px; width: 90%">
            </div>
        </div>
    </section>

    <section id="about4" class="container-fluid mt-5" style="background: #1F46CD">
        <div class="row">
            <div class="col-md-6 about4-text" style="color: white; padding-top: 100px; padding-left: 70px; align-items: center">
                <h1 class="fw-bold mb-5" style="font-family: 'Oswald', sans-serif; font-size: 50px; letter-spacing: 2px;">Our Vision</h1>
                <p class="lh-lg fs-3 pe-4" style="font-family: 'Montserrat', sans-serif; font-size: 20px;">
                    To be leading & trusted supply chain service provider
                    in APAC Region.
                </p>
            </div>
            <div class="col-md-6 px-0">
                <img src="img/pic-10.png" class="img-fluid" style="height: 450px; width: 100%">
            </div>
        </div>
    </section>

    <!-- Our Employers -->
    <div class="our-employers container pt-5 mt-5 margin-bottom">
        <h1 class="text-center fw-bold text-uppercase pb-5">Our Employers</h1>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <div class="items shadow bg-white m-0 m-lg-2">
                <div class="img p-3">
                    <img src="{{ asset('img/pic-6.png') }}" alt="" class="w-100 h-auto">
                </div>
                <div class="text p-3">
                    <h5 class="text-center fw-bold">Marie Phillips</h5>
                </div>
            </div>
            <div class="items shadow bg-white m-0 m-lg-2">
                <div class="img p-3">
                    <img src="{{ asset('img/pic-6.png') }}" alt="" class="w-100 h-auto">
                </div>
                <div class="text p-3">
                    <h5 class="text-center fw-bold">Willie Morgan</h5>
                </div>
            </div>
            <div class="items shadow bg-white m-0 m-lg-2">
                <div class="img p-3">
                    <img src="{{ asset('img/pic-6.png') }}" alt="" class="w-100 h-auto">
                </div>
                <div class="text p-3">
                    <h5 class="text-center fw-bold">Justin Sims</h5>
                </div>
            </div>
            <div class="items shadow bg-white m-0 m-lg-2">
                <div class="img p-3">
                    <img src="{{ asset('img/pic-6.png') }}" alt="" class="w-100 h-auto">
                </div>
                <div class="text p-3">
                    <h5 class="text-center fw-bold">John Doe</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Employees -->

    <hr style="height: 2px; background-color: #080F2A; margin-top: 100px">

    <!-- Get in Touch Section Start -->
    <div id="getintouch" class="container py-5" style="padding-left: 50px; padding-right: 50px">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-3 mb-md-0 d-flex justify-content-center align-items-center map-container">
                <!-- Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3859.8444628726284!2d121.0658154!3d14.6647667!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b75cacdab3f9%3A0xd4ad522bc3df1169!2sTekton%20Manufacturing%20Corporation!5e0!3m2!1sen!2sph!4v1679985531816!5m2!1sen!2sph" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 col-md-12 text-center" style="border-radius: 20px; border: solid gray thin; padding: 70px 70px 80px 70px">
                <h1 style="font-family: 'DM Sans', sans-serif; font-weight: 700;">Get In Touch</h1>
                <p class="mb-5 fs-5" style="font-family: 'Barlow', sans-serif; font-weight: 500">If you got any questions, please do not hesitate to send us a message.
                    We reply within 24 hours!
                </p>
                <!-- Contact form -->
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-control-lg border-dark rounded-3" id="" name="" placeholder="Your Name *">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-control-lg border-dark rounded-3" id="" name="" placeholder="Your Email *">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg border-dark rounded-3" id="" name="" placeholder="Your Email *">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-control-lg border-dark rounded-3" id="" name="" rows="4" placeholder="Your Email *"></textarea>
                    </div>
                    <button type="button" class="btn py-3 px-5 mt-4 fs-5 fw-bold rounded-3" style="background: #c70039; color: white">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Get in Touch Section End -->
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection
