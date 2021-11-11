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
            <h2 class="fw-bolder">Sign Up To Book Service</h2>
            {{-- <p class="lead mb-0"></p> --}}
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <form id="contactForm" action="{{route('user.register')}}" method="POST">
                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                        <label for="name">Full name</label>

                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required />
                        <label for="email">Email address</label>


                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="number" name="phonenumber" placeholder="Phone Number" required />
                        <label for="phone">Phone number</label>

                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="password" name="password" placeholder="Password" required />
                        <label for="phone">Password</label>

                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Register</button></div>
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


@section('bookingFrom')
<!-- Contact section-->
<section class="bg-light py-5">
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
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
