<?php

namespace App\Http\Controllers\FrontEndControll;

use App\Http\Controllers\Controller;
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



    //function to handle logout

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
