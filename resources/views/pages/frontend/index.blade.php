@extends('Layouts.frontendLayout.frontheadmaster')

@section('tittle')
Home || Bike Service
@endsection

@section('header')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">We Are Here To Make You Move Fast</h1>
                    <p class="lead text-white-50 mb-4">Quickly Book a Service and And Save Your Time !</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        @if (!Auth::user())
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{route('user.signup')}}">Sign Up</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{route('user.login')}}">Log In</a>
                        @else
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#bookingForm">Book Service</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection

@section('service')
<!-- Pricing section-->
<section id="service" class="bg-light py-5 border-bottom">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Pay as you be Cool</h2>
            <p class="lead mb-0">With our no hassle Service plans</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Oil Change</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">450 Rs/-</span>
                            {{-- <span class="text-muted">/ mo.</span> --}}
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>Filter Cleaning</strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Break Oil
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Chain Lubrigation
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Retuning
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Book Now</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">General Service</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">700 Rs/-</span>
                            {{-- <span class="text-muted">/ mo.</span> --}}
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>Filter Cleaning</strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Break Oil,Chain Lubrigation
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Disk Pad Changing
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Complete Over Oil
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Book Now</a></div>
                    </div>
                </div>
            </div>
            <!-- Pricing card free-->
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Water Wash</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">200 Rs/-</span>
                            {{-- <span class="text-muted">/ mo.</span> --}}
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                <strong>Foam Wash</strong>
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Rim Rust Coating
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                wheel Alignment
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check text-primary"></i>
                                Electrical Check Up
                            </li>
                        </ul>
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Book Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@if (Auth::user())
@section('bookingFrom')
<!-- Contact section-->
<section class="bg-light py-5" id="bookingForm">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h2 class="fw-bolder">Book Here For Service</h2>
            <p class="lead mb-0">Feel Free To Write Your Complient</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm">
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your Compliants" style="height: 10rem" required></textarea>
                        <label for="message">Complaints On Bike</label>

                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <div class="form-group">
                            <label for="">Service</label>
                            <select class="form-control" name="service" id="" required>
                                <option value="" selected>Choose the service</option>
                                @foreach ($services as $service )
                                <option value="{{$service->id}}">{{$service->service_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="date" required />
                        <label for="phone">On Date</label>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@endif
