<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Logo_cattofee(white).png') }}" alt="" width="" height="40" style="margin-right: 20px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto navbar-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">The Cats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end">

                @guest
                <a class="button btn btn-outline-light mx-2 d-flex align-items-center justify-content-center" href="{{ url('/login') }}">Masuk</a>
                <a class="button btn btn-warning mx-2 d-flex align-items-center justify-content-center" href="{{ url('/register') }}">Daftar</a>
                @else
                <!-- Display this content for authenticated users -->
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button class="ikon">
                            <img src="{{ asset('images/ikon_search.png') }}" alt="search" width="20" height="20">
                        </button>
                    </form>
                </div>

                <button class="ikon">
                    <img src="{{ asset('images/ikon_belanja.png') }}" alt="shopping" width="20" height="20">
                </button>
                <button class="ikon">
                    <img src="{{ asset('images/ikon_akun.png') }}" alt="account" width="20" height="20">
                </button>

                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="button btn btn-warning mx-2 d-flex align-items-center justify-content-center">
                        Logout
                    </button>
                </form>


                @endguest
            </div>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
    </nav>

    <div class="hero">
        <h1>Teman Nongkrong</h1>
        <h1>Beda dari Lainnya</h1>
        <p>Kucing memiliki kepribadian yang tenang sehingga cocok</p>
        <p>dijadikan sebagai teman bersantai sembari menikmati kopi</p>
        <p>melepas penat dan beban hidup.</p>
        <!-- Add more content or customize as needed -->
        <div class="left-bot-btn">
            <button class="button btn btn-outline-warning mx-2">Reservasi Sekarang</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>