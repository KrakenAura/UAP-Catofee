@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/order_history.css') }}">
@endsection


@section('content')
<div>
    <div class="header-section">
        <br>
        <br>
        <h2>Riwayat Pemesanan</h2>
        <input class="form-control" type="text" placeholder="Cari...">
        <button class="search-btn"><i data-feather="search"></i></button>
    </div>
</div>

<div class="container">
    <div class="card">

        <div class="container">
            <div class="order-info-header">
                <div>
                    <h4><b>ID</b></h4>
                </div>
                <div>
                    <h4><b>Tanggal</b></h4>
                </div>
                <div>
                    <h4><b>Pesanan</b></h4>
                </div>
                <div>
                    <h4><b>Ruangan</b></h4>
                </div>
                <div>
                    <h4><b>Total Harga</b></h4>
                </div>
            </div>
            @foreach ($orders as $order)
            <div class="order-info-content">
                <div>
                    <p>{{ $order->id }}</p>
                </div>
                <div>
                    <p>{{ $order->date }}</p>
                </div>
                <div>
                    <p>{{ $order->menu_name }}</p>
                </div>
                <div>
                    <p>{{ $order->room }}</p>
                </div>
                <div>
                    <p>Rp {{ $order->total_price }}</p>
                </div>
            </div>
            @endforeach
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
@endsection