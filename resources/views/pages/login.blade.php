@extends('Layouts.loginLayout')
@section('login')
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container px-4">
            <a class="navbar-brand " href="{{route('home')}}">
                <h1 class="text-white">John Bike Service</h1>
                {{-- <img src="../assets/img/brand/white.png" /> --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
                                <img src="../assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#">
                            <i class="ni ni-circle-08"></i>
                            <span class="nav-link-inner--text">User Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="#">
                            <i class="ni ni-circle-08"></i>
                            <span class="nav-link-inner--text">Home</span>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../examples/login.html">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li> --}}
                    {{-- <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../examples/profile.html">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-inner--text">Profile</span>
              </a>
            </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-1 py-lg-6">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Welcome!</h1>
                        {{-- <p class="text-lead text-light">Tree of Technology</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--9 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3">
                            <h3>Login</h3>
                        </div>
                        <div class="btn-wrapper text-center">
                            @if(session('auth_error'))
                            <div class="text-danger">
                                {{session('auth_error')}}
                            </div>
                            @endif
                            {{-- <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a> --}}
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        {{-- <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div> --}}
                        <form role="form" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                @error('username')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" name="username" placeholder="Username" type="text" value="{{old('username')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" name="password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="text-center float-right">
                                <button type="submit" class="btn btn-success my-4">Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    {{-- <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div> --}}
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        © 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Saravan Sai</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Exciteon</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
