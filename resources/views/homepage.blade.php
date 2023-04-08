@extends('layouts.app')

@section('title', 'Home')

<!-- Content -->
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('/img/bg-1.png') }}" alt="Hero Image" class="hero-image">
        <div class="container">
            <h1 class="fw-semibold">We Deliver with Automation</h1>
            <p class="fw-semibold">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea."
            </p>
            <div class="d-flex justify-content-start">
                <button type="button" class="btn py-3 px-5 mt-4 fs-5 fw-bold" style="background: #c70039; color: white; border-radius: 13px">
                    Discover More
                </button>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section class="about-us" style="background: #e6e7eb; padding: 80px 50px 90px 50px">
        <div class="container" style="max-width: 75%">
            <div class="row align-items-center">
                <div class="img-container col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('img/pic-1.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="text-container ps-5">
                        <p class="mb-4 fs-4 lh-lg underline-with-gap">Welcome to Megatekton</p>
                        <h1 class="fw-bold mb-4" style="color: #192a56">We are one of the leading companies who are</h1>
                        <p class="fs-5 pe-4" style="font-family: 'Inter', sans-serif; text-align: justify;">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt consequuntur, earum distinctio nam repudiandae accusantium totam corrupti rem similique? Fugit facilis tempore maxime expedita recusandae laudantium adipisci non rerum accusamus!
                        </p>
                        <button type="button" class="btn py-3 px-5 mt-4 fs-5 fw-bold" style="background: #c70039; color: white; border-radius: 13px">
                        Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>      
    <!-- End About Us -->

    <div class="gap" style="height: 120px; background: white"></div>

    {{-- style="background: rgb(230, 227, 227) --}}

    <section id="services" class="container-fluid" style="padding: 100px 0 100px 0">
        <div class="container p-5" style="max-width: 75%;">
            <h1 class="services-title fw-bold fs-1 mb-4" style="font-family: 'Inter', sans-serif; color: #0c203a;">Our Services</h1>
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

    <div class="gap" style="height: 50px; background: white"></div>

    <section id="employment">
        <div class="py-5">
            <div class="bg-dblue bg-light">
                <div class="container">
                    <div class="max-width px-2">
                        <h1 class="employment-title fw-bold fs-1 mb-4" style="font-family: 'Inter', sans-serif; color: #0c203a;">Our Employment</h1>
                        <div class="employment-description" style="margin-right: 30%; margin-bottom: 50px">
                            <p style="font-family: 'Inter', sans-serif; font-size: 20px; color: #6E789E">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit sed do eiusmod
                                tempor incidunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="position-relative d-flex flex-wrap justify-content-center align-items-center margin-top px-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <img src="/img/businessman-with-leather-briefcase.jpg" alt="" style="width: 100%; border-radius: 10px" class="mb-2">
                            <div class="box text-center">
                                <h1 class="fw-bold fs-4" style="font-family: 'Poppins', sans-serif; font-weight: 500">Jane Doe</h1>
                                <p class="mb-4" style="font-family: 'Poppins', sans-serif">
                                    CLO
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <img src="/img/businessman-with-leather-briefcase.jpg" alt="" style="width: 100%; border-radius: 10px" class="mb-2">
                            <div class="box text-center">
                                <h1 class="fw-bold fs-4" style="font-family: 'Poppins', sans-serif; font-weight: 500">John Doe</h1>
                                <p class="mb-4" style="font-family: 'Poppins', sans-serif">
                                    PRESIDENT
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <img src="/img/businessman-with-leather-briefcase.jpg" alt="" style="width: 100%; border-radius: 10px" class="mb-2">
                            <div class="box text-center">
                                <h1 class="fw-bold fs-4" style="font-family: 'Poppins', sans-serif; font-weight: 500">Kevin Hart</h1>
                                <p class="mb-4" style="font-family: 'Poppins', sans-serif">
                                    COO
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gap" style="height: 120px; background: white"></div>

    <!-- Blogs -->
    <div class="blogs-container container-fluid bg-light px-4 px-lg-5">
        <div class="container p-4 p-lg-5">
            <h1 class="mt-4 text-center" style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #0e305d">Blogs</h1>
            <div class="text-center mb-4">
                <img src="{{ asset('img/gavel.png') }}" alt="" width="150" height="20" >
            </div>
            {{-- <div class="" style="width: 10px; height: 10px">
                <img src="https://img.icons8.com/glyph-neue/24/null/law.png"/>
            </div> --}}
            <div class="text-center" style="margin-bottom: 50px">
                <p class="blogs-description" style="font-family: 'Inter', sans-serif; font-size: 16px; color: #4c5475">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit sed do e te incididunt ut <br>
                    labore et dolore magna aliqua Ut enim ad minim.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 py-4">
                    <div class="text-container bg-white shadow rounded-4 me-3" style="padding: 50px 30px">
                        <h2 class="text-container-title mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Lorem Ipsum</h2>
                        <p class="text-container-description mb-4 fw-bold" style="font-family: 'Montserrat', sans-serif; font-size: 15px">
                            Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo
                            tempor incididunt ut labore etdolore m aliqu enim ad minim veniam
                            qui nostrud exercitation ulla.
                        </p>
                        <a href="#" class="btn px-4 py-2 mt-3 shadow" style="background: white; color: #c70039; border-radius: 10px; border: solid #c70039 thin; font-size: 20px">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-4">
                    <div class="text-container bg-white shadow rounded-4 me-3" style="padding: 50px 30px">
                        <h2 class="text-container-title mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Lorem Ipsum</h2>
                        <p class="text-container-description mb-4 fw-bold" style="font-family: 'Montserrat', sans-serif; font-size: 15px">
                            Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo
                            tempor incididunt ut labore etdolore m aliqu enim ad minim veniam
                            qui nostrud exercitation ulla.
                        </p>
                        <a href="#" class="btn px-4 py-2 mt-3 shadow" style="background: white; color: #c70039; border-radius: 10px; border: solid #c70039 thin; font-size: 20px">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 py-4">
                    <div class="text-container bg-white shadow rounded-4 me-3" style="padding: 50px 30px">
                        <h2 class="text-container-title mb-4 fs-5" style="font-family: 'Montserrat', sans-serif; font-weight: 700">Lorem Ipsum</h2>
                        <p class="text-container-description mb-4 fw-bold" style="font-family: 'Montserrat', sans-serif; font-size: 15px">
                            Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo
                            tempor incididunt ut labore etdolore m aliqu enim ad minim veniam
                            qui nostrud exercitation ulla.
                        </p>
                        <a href="#" class="btn px-4 py-2 mt-3 shadow" style="background: white; color: #c70039; border-radius: 10px; border: solid #c70039 thin; font-size: 20px">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs End -->

    <!-- Get in Touch Section Start -->
    <div id="getintouch" class="container py-5" style="padding-left: 50px; padding-right: 50px">
        <div class="row">
            <h1 class="mb-5 fw-bold text-start justify-content-center" style="padding-left: 120px">Don't Hesitate to <br> Contact Us</h1>
            <div class="col-lg-6 col-md-12 mb-3 mb-md-0 d-flex justify-content-center align-items-center map-container">
                <!-- Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3859.8444628726284!2d121.0658154!3d14.6647667!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b75cacdab3f9%3A0xd4ad522bc3df1169!2sTekton%20Manufacturing%20Corporation!5e0!3m2!1sen!2sph!4v1679985531816!5m2!1sen!2sph" width="70%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6 col-md-12" style="border-radius: 20px;">
                <!-- Contact form -->
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Your Name *</label>
                            <input type="text" class="form-control form-control-lg rounded-3" id="name" name="name" placeholder="Enter your name here...">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Your Email *</label>
                            <input type="text" class="form-control form-control-lg rounded-3" id="email" name="email" placeholder="Enter your email here...">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label mb-3"><i>Message *</i></label>
                        <textarea class="form-control form-control-lg rounded-3" id="message" name="message" rows="4" placeholder="Describe your issue..."></textarea>
                    </div>
                    <div class="d-flex justify-content-start">
                        <button type="button" class="btn py-2 px-5 mt-4 fs-5 fw-bold rounded-3" style="background: #c70039; color: white">
                          Submit
                        </button>
                    </div>
                    {{-- <button type="button" class="btn py-2 px-5 mt-4 fs-5 fw-bold rounded-3" style="background: #c70039; color: white">
                      Submit
                    </button> --}}
                </form>
                {{-- <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-control-lg border-dark rounded-3" id="" name="" placeholder="Your Name *">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control form-control-lg border-dark rounded-3" id="" name="" placeholder="Your Email *">
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control form-control-lg border-dark rounded-3" id="" name="" rows="4" placeholder="Your Email *"></textarea>
                    </div>
                    <button type="button" class="btn py-3 px-5 mt-4 fs-5 fw-bold rounded-3" style="background: #c70039; color: white">
                        Submit
                    </button>
                </form> --}}
            </div>
        </div>
    </div>
    <!-- Get in Touch Section End -->
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection