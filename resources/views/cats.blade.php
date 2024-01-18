<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+z0I5t9Y0P4pWtnjO6ZvJ5e6UxZjzjd23Gvj8qbk5F36bOgdf1k2xjK1l5U2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/cat_style.css') }}">
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
        <h1>Temui Kucing Kami</h1>
    </div>

    <!-- First Block -->
    <div class="cats text-center t-4 custom-width" id="cats-section">
        <div class="row gx-0 justify-content-start">
            <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
                <img src="{{ asset('images/Hinnss.png') }}" alt="" class="img-fluid rounded-border-white" width="30%" style="margin-right: 3rem; margin-left: 12rem" />
                <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-start">
                    <h5 style="margin-top: 5rem;">Hinnss</h5>
                    <p style="width: auto;">Hinns adalah kucing pemalu yang suka bersembunyi di pojokan. Namun, begitu dia merasa aman, dia akan keluar dan menunjukkan sisi manisnya. Cobalah memberinya sedikit waktu, dan Anda akan melihat betapa menawan kepribadiannya.</p>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row gx-0 justify-content-end">
            <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
                <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-end">
                    <h5 style="margin-top: 5rem;">Jamal</h5>
                    <p style="width: auto;">Jamal adalah kucing yang selalu ceria dan ramah. Dia suka bermain dengan mainan dan sangat disukai oleh pengunjung kafe.</p>
                </div>
                <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid rounded-border-white" width="30%" style="margin-right: 5rem; margin-left: 5rem" />
            </div>
        </div>
    </div>

    <!-- Second Block -->
    <div class="cats2 text-center t-4 custom-width" id="cats-section" style="margin-top: 5rem ;">
        <div class="row gx-0 justify-content-start">
            <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
                <img src="{{ asset('images/fruity.png') }}" alt="" class="img-fluid rounded-border-black" width="30%" style="margin-right: 3rem; margin-left: 12rem" />
                <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-start">
                    <h5 style="margin-top: 5rem;">Fruity</h5>
                    <p style="width: auto;">Fruity adalah kucing kecil yang penuh kasih sayang. Dengan bulu lembut dan matanya yang penuh kehangatan, Fruity suka berada di pangkuan pengunjung, memberikan kelembutan yang membuat hati Anda hangat.</p>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row gx-0 justify-content-end">
            <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
                <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-end">
                    <h5 style="margin-top: 5rem;">Faizah</h5>
                    <p style="width: auto;">Faizah adalah kucing penjelajah sejati. Dengan bulu lebat dan mata tajam, dia senang berkeliling cafe, menyelidiki setiap sudut dan celah. Jangan terkejut jika dia mendekati Anda dengan tatapan ingin tahu, siap untuk bercengkerama.</p>
                </div>
                <img src="{{ asset('images/faizah.png') }}" alt="" class="img-fluid rounded-border-black" width="30%" style="margin-right: 3rem; margin-left: 5rem" />
            </div>
        </div>
    </div>



    <br>
    <br>

    <div class="copyright-section text-center py-4" style="background-color: #ffd700;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p1>&copy; 2024 Cattofee. Hak Cipta dilindungi oleh undang-undang.
                        Dilarang mengambil foto dan tulisan tanpa izin dari Cattofee.</p1>
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