@extends ('dashboard_layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/order_dashboard.css') }}">
@endsection

@section('content-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Customer</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Customer</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @endsection

    @section('content')

    <table>
        <tr>
            <th>ID</th>
            <th>Room</th>
            <th>Customer</th>
            <th>Menu</th>
            <th>Price</th>
            <th>Date</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->room }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->menu_name }}</td>
            <td>Rp {{ $order->total_price }}</td>
            <td>{{ $order->date }}</td>
        </tr>
        @endforeach
    </table>
    <!-- Add this inside the content-wrapper, after the table -->
    <!-- Add this button where you want it to appear, for example, after the table -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchOrderModal">
        Cari Berdasarkan Pelanggan
    </button>

    <div class="modal fade" id="searchOrderModal" tabindex="-1" role="dialog" aria-labelledby="searchOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchOrderModalLabel">Search Orders</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('dashboard.orders') }}" method="GET">
                        <div class="form-group">
                            <label for="searchQuery">Nama Pelanggan:</label>
                            <input type="text" class="form-control" id="searchQuery" name="query" placeholder="Enter customer name or menu name">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    @endsection
    <!-- /.content-wrapper -->

    @section('custom-scripts')
    @endsection