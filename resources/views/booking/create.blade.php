@extends('Layouts.Master')
@section('top-section')
<div class="container">
    <div class="row px-4 mt-3">
        <div class="col-lg-6 col-4">
            <h6 class="h2 text-white d-inline-block mb-0">New Bookings</h6>
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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Booked</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->user->email}}</td>
                                <td>{{$booking->user->phonenumber}}</td>
                                <td>{{$booking->service_on_date}}</td>
                                <td><span class="badge badge-default">{{$booking->created_at->diffForHumans()}}</span></td>
                                <td><a href="{{route('booking.show',$booking->id)}}" class="btn btn-sm btn-warning"><i class="far fa-eye px-1"></i>view</a></td>
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
