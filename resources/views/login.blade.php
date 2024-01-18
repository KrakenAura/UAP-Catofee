<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoginPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container log-in-container">
            <form method="POST" action="{{ url('/login') }}">
                <h1>Login</h1>
                @csrf <!-- Add CSRF token -->
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary custom-button" type="Login">Log In</button>
                </div>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa fa-google fa-2x"></i></a>
                    <h5>Still don't have an account?<button class="text btn">Sign In</button>
                    </h5>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1><img src="{{ asset('images/Logo_cattofee(black).png') }}" alt="Your Logo" style="width:430px;" /></h1>
                    <p>Teman Nongkrong Beda dari Lainnya</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


</html>