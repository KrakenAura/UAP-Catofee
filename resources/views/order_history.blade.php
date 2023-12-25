<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/order_history.css') }}">
</head>

<body>
    <header>
        <div class="header-section">
            <h2>Riwayat Pemesanan</h2>
            <input class="form-control" type="text" placeholder="Cari...">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </header>

    <div class="container">
        <div class="card">
            @foreach ($orders as $order)
            <div class="container">
                <div class="order-info">
                    <div>
                        <h4><b>ID</b></h4>
                        <p>{{ $order->id }}</p>
                    </div>
                    <div>
                        <h4><b>Tanggal</b></h4>
                        <p>{{ $order->date }}</p>
                    </div>
                    <div>
                        <h4><b>Pesanan</b></h4>
                        <p>{{ $order->menu_name }}</p>
                    </div>
                    <div>
                        <h4><b>Ruangan</b></h4>
                        <p>{{ $order->room }}</p>
                    </div>
                    <div>
                        <h4><b>Total Harga</b></h4>
                        <p>Rp {{ $order->total_price }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <button type="button" class="btn btn-primary">Tambah Pesanan</button>
    </div>
</body>

</html>