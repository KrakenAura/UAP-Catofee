<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <title>Document</title>
</head>

<body>

    <div class="profile-container">
        <div class="profile-info">
            <div class="profile-picture">
                <img src="path/to/profile-picture.jpg" alt="Profile Picture">
            </div>
            <h2>Brahman</h2>

        </div>

        <ul class="menu-list">
            <li class="menu-item"><a target="_blank" href="#"><i class="me-2 custom-feather-icon" data-feather="grid"></i> Dashboard</a></li>
            <li class="menu-item"><a target="_blank" href="#"><i class="me-2 custom-feather-icon" data-feather="clipboard"></i> Order History</a></li>
            <li class="menu-item"><a target="_blank" href="#"><i class="me-2 custom-feather-icon" data-feather="log-out"></i> Logout</a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>