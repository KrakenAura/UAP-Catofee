@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/menu_style.css') }}">
@endsection



@section('content')
<div class="hero">
    <h1>Pilih Menumu</h1>
</div>

<div class="bottom_page row row-cols-1 row-cols-md-2 align-items-center">
    <!-- Baris 1 -->
    <div class="col mb-4">
        <!-- Menu 1 dan 2 Group -->
        <div class="menu-group">
            <!-- Menu 1 -->
            <div class="card menu-item" style="width: 18rem;">
                <img src="{{ asset('images/roti-bakar.jpg') }}" class="card-img-top img-fluid" alt="Menu 1">
                <div class="card-body">
                    <h5 class="card-title">Menu 1</h5>
                    <p class="card-text">Price: $10.99</p>
                </div>
            </div>

            <!-- Menu 2 -->
            <div class="card menu-item" style="width: 18rem;">
                <img src="{{ asset('images/waffle.jpg') }}" class="card-img-top img-fluid" alt="Menu 2">
                <div class="card-body">
                    <h5 class="card-title">Menu 2</h5>
                    <p class="card-text">Price: $12.99</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Baris 2 -->
    <div class="col mb-4">
        <!-- Menu 3 dan 4 Group -->
        <div class="menu-group">
            <!-- Menu 3 -->
            <div class="card menu-item" style="width: 18rem;">
                <img src="{{ asset('images/matcha-milk.jpg') }}" class="card-img-top img-fluid" alt="Menu 3">
                <div class="card-body">
                    <h5 class="card-title">Menu 3</h5>
                    <p class="card-text">Price: $14.99</p>
                </div>
            </div>

            <!-- Menu 4 -->
            <div class="card menu-item" style="width: 18rem;">
                <img src="{{ asset('images/americano.jpg') }}" class="card-img-top img-fluid" alt="Menu 4">
                <div class="card-body">
                    <h5 class="card-title">Menu 4</h5>
                    <p class="card-text">Price: $16.99</p>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<div class="order-form pb-4">
    <br>
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
        <br>
        <button type="submit" class="btn-custom">Place Order</button>
    </form>
</div>

@endsection