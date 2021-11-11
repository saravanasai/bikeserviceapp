<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="#!">John Bike Service</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                @if (!Auth::user())
                <li class="nav-item"><a class="nav-link" href="{{route('user.signup')}}">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('user.login')}}">Log In</a></li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">{{Auth::user()->name}}</a></li>

                <form action="{{route('user.logout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-primary">Logout</button>
                </form>

                @endif

            </ul>
        </div>
    </div>
</nav>
