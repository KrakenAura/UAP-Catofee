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
            <div class="container">
                <div class="order-info">
                    <div>
                        <h4><b>ID</b></h4>
                        <p class="order-id">1</p>
                    </div>
                    <div>
                        <h4><b>Tanggal</b></h4>
                        <p>Senin, 25-12-2023</p>
                    </div>
                    <div>
                        <h4><b>Pesanan</b></h4>
                        <p>Milky Matcha</p>
                    </div>
                    <div>
                        <h4><b>Ruangan</b></h4>
                        <p>Fur Room</p>
                    </div>
                    <div>
                        <h4><b>Total Harga</b></h4>
                        <p>Rp 15.000</p>
                    </div>
                    <div class="order-actions">
                        <button type="button" class="btn btn-warning edit-btn">Edit</button>
                        <button type="button" class="btn btn-danger delete-btn">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Tambah Pesanan</button>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="editedItem">Edit Item:</label>
                    <input type="text" id="editedItem" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>