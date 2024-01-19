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

<div class="order-form pb-4">
    <br>
    <h2>Order Form</h2>
    <form method="POST" action="{{ route('orders.store') }}">

        @csrf
        <div class="form-group">
            <label for="menuSelection">Menu Selection</label>
            <select class="form-control" id="menuSelection" name="menu_id">
                <option value="1">Menu 1</option>
                <option value="2">Menu 2</option>
                <option value="3">Menu 3</option>
                <option value="4">Menu 4</option>
            </select>
        </div>
        <input type="hidden" class="form-control" id="username" name="username" value="{{ auth()->check() ? auth()->user()->username : '' }}" readonly>

        <div class="form-group">
            <label for="roomSelection">Room Selection</label>
            <select class="form-control" id="roomSelection" name="room">
                <option value="room1">Room 1</option>
                <option value="room2">Room 2</option>
            </select>
        </div>

        <div class="form-group">
            <label for="totalPrice">Total Price</label>
            <input type="text" class="form-control" id="totalPrice" name="total_price" readonly>
        </div>

        <button type="submit" class="btn-custom">Place Order</button>
    </form>
</div>
<script>
    $(document).ready(function() {
        // Define menu prices
        const menuPrices = {
            '1': 10.99,
            '2': 12.99,
            '3': 14.99,
            '4': 16.99,
        };

        function updateTotalPrice() {
            const menuSelection = $('#menuSelection').val();
            const roomSelection = $('#roomSelection').val();
            const quantity = 1;

            // Get the price based on the selected menu
            const selectedPrice = menuPrices[menuSelection] || 0;

            // Calculate total price based on the selected menu, room, and quantity
            const totalPrice = selectedPrice * quantity;

            // Update the total price input field
            $('#totalPrice').val(totalPrice.toFixed(2));
        }

        // Bind the updateTotalPrice function to the change event of menuSelection and roomSelection
        $('#menuSelection').on('change', updateTotalPrice);

        // Call the updateTotalPrice function initially to set the initial total price
        updateTotalPrice();
    });
</script>


@endsection