@extends('Layouts.frontendLayout.frontheadmaster')

@section('tittle')
My Bookings || Bike Service
@endsection

@section('header')
<div class="container p-5">
    <div class="row gx-5 justify-content-center">

        @forelse ($mybookings as $mybooking )
        <div class="col-lg-6 col-xl-4">
            <div class="card mb-5 mb-xl-0">
                <div class="card-body p-5">
                    <div class="small text-uppercase fw-bold text-muted">{{$mybooking->service_on_date}}</div>
                    <div class="mb-3">
                        <span class="display-6 fw-bold">{{$mybooking->service->service_name}}</span>
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

                    <div class="d-grid"><a class="btn btn-outline-primary" href="#">{{$mybooking->status->status}}</a></div>


                </div>
            </div>
        </div>
        @empty
        <center>
            No Bookings !
        </center>
        @endforelse


    </div>
</div>

@endsection

@section('service')
<!-- Pricing section-->
<section id="service" class="bg-light py-5 border-bottom">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Thanks For Choosing Us</h2>
            <p class="lead mb-0">We Kindly Welcome You Back</p>
        </div>
</section>
@endsection

@section('js')
@if (session()->has('success'))
<script>
    Swal.fire(
        'Good job!'
        , 'Booked Success!'
        , 'success'
    )

</script>
@endif
@endsection
