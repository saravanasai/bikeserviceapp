<?php

namespace App\Http\Controllers\FrontEndControll;

use App\Http\Controllers\Controller;
use App\Models\AdminModels\Booking;
use App\Models\AdminModels\Service;
use App\Models\AdminModels\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //load home page for front end
    public function index()
    {
        return view('pages.frontend.index', ["services" => Service::all()]);
    }

    //get request of sign up page
    public function signup()
    {
        return view('pages.frontend.Signup',);
    }

    //register the customer
    public function registerUser(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phonenumber" => $request->phonenumber,
            "password" => Hash::make($request->password),
            "remember_token" => rand(60, 1500),
        ]);
        if ($user) {
            if (Auth::attempt(["email" => $request->email, "password" => $request->password], $remember = false)) {
                return redirect()->intended('/');
            }
        }
    }

    //bookings request
    public function userBooking(Request $request)
    {
        $booking = Booking::create([
            "booking_user" => Auth::user()->id,
            "complaint" => $request->complaint,
            "service_required" => $request->service,
            "service_on_date" => $request->date,
            "booking_status" => 1,
        ]);
        if ($booking) {

            return redirect()->route('home')->with('success', "Booked Successfully");
        } else {
            toastr()->error('Failed Booking');
        }
    }

    public function userLogin(Request $request)
    {
        if (Auth::attempt(['phonenumber' => $request->phonenumber, 'password' => $request->password])) {

            return redirect()->intended('/');
        } else {
            dd("failded");
        }
    }


    public function userMyBookings()
    {

        return view('pages.frontend.mybookings', ["mybookings" => Booking::where('booking_user', Auth::user()->id)->where('booking_status', '!=', 4)->get()]);
    }
    //function to handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
