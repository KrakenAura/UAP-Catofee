<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Homepage')</title>
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/layouts_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KJX5FZIzvYb5JpbIMCO0CAnC5q5zqjIww3QVg4oLqZ13KeFwBIURtC8AsiR1OVfN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/Logo_cattofee(white).png') }}" alt="" width="" height="40" style="margin-right: 20px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto navbar-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="cats">The Cats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us">About Us</a>
                    </li>

                </ul>
            </div>
            <div class="d-flex justify-content-end">

                @guest
                <a class="button btn btn-outline-light mx-2 d-flex align-items-center justify-content-center" href="{{ url('/login') }}">Masuk</a>
                <a class="button btn btn-warning mx-2 d-flex align-items-center justify-content-center" href="{{ url('/register') }}">Daftar</a>
                @else
                <!-- <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button class="ikon">
                            <img src="{{ asset('images/ikon_search.png') }}" alt="search" width="20" height="20">
                        </button>
                    </form>
                </div> -->

                <button class="ikon" onclick="window.location.href='/order-history'">
                    <img src="{{ asset('images/ikon_belanja.png') }}" alt="shopping" width="20" height="20">
                </button>
                <!-- <button class="ikon">
                    <img src="{{ asset('images/ikon_akun.png') }}" alt="account" width="20" height="20">
                </button> -->

                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="button btn btn-warning mx-2 d-flex align-items-center justify-content-center">
                        Logout
                    </button>
                </form>


                @endguest
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <div class="copyright-section text-center py-4" style="background-color: #ffd700;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Cattofee. Hak Cipta dilindungi oleh undang-undang.
                        Dilarang mengambil foto dan tulisan tanpa izin dari Cattofee.</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">

                    <a href=" https://www.instagram.com/" target="_blank" class="me-3 custom-feather-icon"><i data-feather="instagram"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="me-3 custom-feather-icon"><i data-feather="twitter"></i></a>
                    <a href="https://youtube.com/" target="_blank" class="me-3 custom-feather-icon"><i data-feather="youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>