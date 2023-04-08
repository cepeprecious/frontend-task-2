@extends('layouts.app')

@section('title', 'Contact Us')

<!-- Content -->
@section('content')

    <div class="first-container position-relative bg-about container-fluid p-0" style="height: 700px;">
        <img src="{{ asset('/img/contact-us-bg.png') }}" alt="" class="w-100 h-auto">
    </div>

    <div id="contact_us" class="container mx-auto mb-5" style="max-width: 70%; border: solid black thin; margin-top: 150px">
        <div class="row p-5">
            <h1 class="text-center mb-5" style="font-family: 'DM Sans', sans-serif; font-weight: 700;">Get In Touch</h1>
            <div class="col-md-6">
                <form>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="" name="" placeholder="First Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="" name="" placeholder="Last Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="" name="" placeholder="Email Address" required>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="" name="" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="" name="" placeholder="Message" style="border-radius: 20px;" required></textarea>
                    </div>
                </form>
            </div>
            <div class="submit-button d-flex justify-content-center mt-5">
                <button type="submit" class="btn fw-bold" style="font-size: 21px; padding: 12px 45px; background-color: #c70039; color: white">Submit</button>
            </div>
        </div>
    </div>

    {{-- MAP --}}
    <div class="third-container container-fluid">
        <div class="container text-black">
            <div class="d-flex justify-content-center">
                {{-- Map Image --}}
                <div class="map-img position-relative">
                    <img src="{{ asset('/img/map.png') }}" alt="" class="img-fluid">
                    <div class="address-container position-absolute top-0 left-0 bg-white">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-container border rounded-5 d-flex justify-content-center align-items-center" style=""><i class="fa-solid fa-location-dot"></i></div>
                            <p>Address Line Comes Here 123<br>lorem lipsum line line1.</p>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-container border rounded-5 d-flex justify-content-center align-items-center" style=""><i class="fa-solid fa-phone"></i></div>
                            <p>+9 123 456 789</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-container border rounded-5 d-flex justify-content-center align-items-center" style=""><i class="fa-solid fa-envelope"></i></div>
                            <p>Info@halari.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- CSS -->
@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">
@endsection

<!-- JS -->
@section('script')

@endsection