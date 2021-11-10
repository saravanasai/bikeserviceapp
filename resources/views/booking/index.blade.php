@extends('Layouts.Master')
@section('top-section')
<div class="container">
    <div class="row px-4 mt-3">
        <div class="col-lg-6 col-4">
            <h6 class="h2 text-white d-inline-block mb-0">Bookings</h6>
        </div>
        <div class="col-lg-6 col-4 text-right">
            <a href="{{route('admin.dashboard')}}" class="btn btn-sm btn-neutral">Home</a>
            <a href="{{route('admin.dashboard')}}" class="btn btn-sm btn-neutral">Back</a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt--6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <a href="{{route('booking.create')}}" class="btn btn-primary"><i class="fas fa-file-alt px-1"></i>New Bookings</a>
                <a href="{{route('bookingOnProcess.index')}}" class="btn btn-warning"><i class="fas fa-laptop-code px-1"></i>On Service</a>
                <a href="{{route('bookingOnCompleted.index')}}" class="btn btn-success"><i class="fas fa-bezier-curve px-2"></i>Ready To Deliver</a>
            </div>
        </div>
    </div>
</div>
@endsection
