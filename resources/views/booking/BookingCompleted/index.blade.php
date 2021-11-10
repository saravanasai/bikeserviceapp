@extends('Layouts.Master')
@section('top-section')
<div class="container mt-3">
    <div class="row px-4">
        <div class="col-lg-6 col-4">
            <h6 class="h2 text-white d-inline-block mb-0">Bikes Ready To Deliver</h6>
        </div>
        <div class="col-lg-6 col-4 text-right">
            <a href="{{route('admin.dashboard')}}" class="btn btn-sm btn-neutral">Home</a>
            <a href="{{route('booking.index')}}" class="btn btn-sm btn-neutral">Back</a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container mt--6">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center text-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->user->phonenumber}}</td>
                                <td>{{$booking->service_on_date}}</td>
                                <td><button type="button" class="btn btn-sm btn-default">
                                        <span>{{$booking->status->status}}</span>
                                        <span class="badge badge-primary"></span>
                                    </button></td>
                                {{-- <td><span class="badge badge-default">{{$booking->created_at->diffForHumans()}}</span></td> --}}
                                <td><a href="{{route('bookingOnCompleted.show',$booking->id)}}" class="btn btn-sm btn-warning"><i class="far fa-eye px-1"></i>Check Out</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{$bookings->links()}}
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
@endsection
