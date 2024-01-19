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
        <tr>
            <td>01</td>
            <td>02</td>
            <td>Aku</td>
            <td>Menu 1</td>
            <td>13.000</td>
            <td>18,01,24</td>
        </tr>
    </table>

    @endsection
    <!-- /.content-wrapper -->

    @section('custom-scripts')
    @endsection