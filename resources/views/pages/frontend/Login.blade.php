@extends('Layouts.frontendLayout.frontheadmaster')

@section('tittle')
Sign Up || Bike Service
@endsection

@section('header')
<!-- Contact section-->
<section class="bg-light py-5">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h2 class="fw-bolder">Login</h2>
            {{-- <p class="lead mb-0"></p> --}}
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <form id="contactForm" action="{{route('user.Loginrequest')}}" method="POST">
                    @csrf
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="text" name="phonenumber" placeholder="Phone Number" required />
                        <label for="phone">Phone number</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="password" name="password" placeholder="Password" required />
                        <label for="phone">Password</label>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Login</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
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
