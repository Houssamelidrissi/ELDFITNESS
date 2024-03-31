<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('image/ELD.png') }}" type="image/png">
    <style>
        #a:hover {
            text-decoration: underline red;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="/">ELDFITNESS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" 
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <!-- ... Other navigation items ... -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    @auth
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;margin-left:50px" href="{{ route('services') }}" id="a">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; margin-left:50px" href="{{ route('shop') }}" id="a">Shop</a>
                    </li>
                    <span class="navbar-text" style="color: red; margin-left:50px">
                        @auth Welcome back {{ auth()->user()->name }} @endauth
                    </span>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white; margin-left:50px" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" id="a">
                            Logout
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;margin-left:50px" href="{{ route('login') }}" id="a">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;margin-left:50px" href="{{ route('aboutus') }}" id="a">AboutUs</a>
                    </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>