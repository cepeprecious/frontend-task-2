<!-- Navbar Start -->
<div class="container-fluid" style="background: #eff2f5">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid p-0 pt-5 pb-3 d-flex">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="{{ asset('/img/3-MEGATEKTON.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end fw-bold" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }} me-3 fs-5" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }} me-3 fs-5" href="{{ url('/about-us') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('services') ? 'active' : '' }} me-3 fs-5" href="{{ url('/services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('careers') ? 'active' : '' }} me-3 fs-5" href="{{ url('/careers') }}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('employers') ? 'active' : '' }} me-3 fs-5" href="{{ url('/employers') }}">Employers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }} fs-5" href="{{ url('/contact-us') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>    
<!-- Navbar End -->