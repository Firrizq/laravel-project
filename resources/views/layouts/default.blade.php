<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>MahaStudent</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
    
</head>

<body>

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{url('/')}}" class="nav-link px-2 text-white">MahaStudent</a></li>
                </ul>
                <div class="text-end">
                    @guest
                    <a href="{{route('login')}}" class="btn btn-outline-light me-2"><i class="bi bi-box-arrow-in-right"></i></a>
                    <a href="{{route('register')}}" class="btn btn-warning"><i class="bi bi-door-open"></i></a>
                    @else
                    <a href="#" class="btn btn-outline-light me-2"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{Auth::user()->name}}</a>
                    <form action="{{route('logout')}}" id="logout-form" method="POST">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </header>
    
    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
