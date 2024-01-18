<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+z0I5t9Y0P4pWtnjO6ZvJ5e6UxZjzjd23Gvj8qbk5F36bOgdf1k2xjK1l5U2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
    <link rel="stylesheet" href="path/to/your/project/web-fonts-with-css/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-KJX5FZIzvYb5JpbIMCO0CAnC5q5zqjIww3QVg4oLqZ13KeFwBIURtC8AsiR1OVfN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>


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
        </div>
    </nav>

    <div class="hero">
        <h1>Teman Nongkrong</h1>
        <h1>Beda dari Lainnya</h1>
        <p>Kucing memiliki kepribadian yang tenang sehingga cocok</p>
        <p>dijadikan sebagai teman bersantai sembari menikmati kopi</p>
        <p>melepas penat dan beban hidup.</p>
        <!-- Add more content or customize as needed -->
        <form method="GET" action="{{ url('/login') }}" class="left-bot-btn">
            @csrf
            <button type="submit" class="button btn btn-outline-warning mx-2">Reservasi Sekarang</button>
        </form>
    </div>
    <!-- The Cats -->
    <div class="cats text-center t-4 custom-width" id="cats-section">
        <h1>The Cats</h1>
        <p>Kucing-kucing di kafe kucing kami dirawat dengan penuh perhatian dan kasih sayang,</p>
        <p style="margin-top: -1rem; margin-bottom: 50px;">memastikan bahwa mereka berada dalam kondisi kesehatan yang optimal.</p>
        <div class="row gx-0 justify-content-center">
            <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-center pe-3">
                <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid" width="40%" />
                <h5 style="margin-right: 7.5rem;">Jamal</h5>
            </div>
            <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-center ps-3">
                <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid" width="40%" />
                <h5 style="margin-left: 7.5rem;">Jamal</h5>
            </div>
            <button type="button" class="btn btn-primary btn-lg custom-large-button" style="margin-top: 40px;">Lihat Lainya >>></button>
        </div>
    </div>

    <div class="operating-hour text-center custom-width" id="operating-hours-section">
        <h1>Operating Hours</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Weekdays</h1>
                <p>Senin - Jumat</p>
                <p>08.00 - 21.00</p>
                <p>Rp.30.000/jam/orang</p>
            </div>
            <div class="col-md-6">
                <h1>Weekdays</h1>
                <p>Sabtu &amp Minggu</p>
                <p>09.00 - 22.00</p>
                <p>Rp.50.000/jam/orang</p>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="copyright-section text-center py-4" style="background-color: #ffd700;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Cattofee. Hak Cipta dilindungi oleh undang-undang.
                        Dilarang mengambil foto dan tulisan tanpa izin dari Cattofee.</p>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <!-- Font Awesome icons -->
                    <a href="#" target="_blank" class="me-3 custom-feather-icon"><i data-feather="instagram"></i></a>
                    <a href="#" target="_blank" class="me-3 custom-feather-icon"><i data-feather="twitter"></i></a>
                    <a href="#" target="_blank" class="me-3 custom-feather-icon"><i data-feather="youtube"></i></a>
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