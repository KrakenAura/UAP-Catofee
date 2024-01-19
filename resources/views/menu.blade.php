@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu_style.css') }}">
@endsection



@section('content')
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

<div class="bottom_page row row-cols-1 row-cols-md-2 align-items-center">
    <!-- Row 1 -->
    <div class="col">
        <!-- Menu 1 -->
        <div class="card menu-item" style="width: 18rem;"> <!-- Adjust the width as needed -->
            <img src="{{ asset('images/roti-bakar.jpg') }}" class="card-img-top img-fluid" alt="Menu 1">
            <div class="card-body">
                <h5 class="card-title">Menu 1</h5>
                <p class="card-text">Price: $10.99</p>
            </div>
        </div>
    </div>

    <div class="col">
        <!-- Menu 2 -->
        <div class="card menu-item" style="width: 18rem;">
            <img src=" {{ asset('images/waffle.jpg') }}" class="card-img-top img-fluid" alt="Menu 2">
            <div class="card-body">
                <h5 class="card-title">Menu 2</h5>
                <p class="card-text">Price: $12.99</p>
            </div>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="col">
        <!-- Menu 3 -->
        <div class="card menu-item" style="width: 18rem;">
            <img src="{{ asset('images/matcha-milk.jpg') }}" class="card-img-top img-fluid" alt="Menu 3">
            <div class="card-body">
                <h5 class="card-title">Menu 3</h5>
                <p class="card-text">Price: $14.99</p>
            </div>
        </div>
    </div>
    <div class="col ">
        <!-- Menu 4 -->
        <div class="card menu-item" style="width: 18rem; ">
            <img src="{{ asset('images/americano.jpg') }}" class="card-img-top img-fluid" alt="Menu 4">
            <div class="card-body">
                <h5 class="card-title">Menu 4</h5>
                <p class="card-text">Price: $16.99</p>
            </div>
        </div>
    </div>
</div>

<div class="order-form">
    <h2>Order Form</h2>
    <form>
        <div class="form-group">
            <label for="menuSelection">Menu Selection</label>
            <input type="text" class="form-control" id="menuSelection" name="menuSelection" placeholder="Enter menu name">
        </div>

        <div class="form-group">
            <label for="roomSelection">Room Selection</label>
            <select class="form-control" id="roomSelection" name="roomSelection">
                <option value="room1">Room 1</option>
                <option value="room2">Room 2</option>
            </select>
        </div>

        <div class="form-group">
            <label for="totalPrice">Total Price</label>
            <input type="text" class="form-control " id="totalPrice" name="totalPrice" readonly>
        </div>

        <button type="submit" class="btn btn-custom mx-auto">Place Order</button>
    </form>
</div>

@endsection