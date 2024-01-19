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
                    <h5 class="card-title">Roti Bakar</h5>
                    <p class="card-text">Harga : Rp13.000,-</p>
                </div>
            </div>

            <!-- Menu 2 -->
            <div class="card menu-item" style="width: 18rem;">
                <img src="{{ asset('images/waffle.jpg') }}" class="card-img-top img-fluid" alt="Menu 2">
                <div class="card-body">
                    <h5 class="card-title">Wafel Coklat</h5>
                    <p class="card-text">Harga : Rp15.000,-</p>
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
                    <h5 class="card-title">Milky Matcha</h5>
                    <p class="card-text">Harga : Rp12.000,-</p>
                </div>
            </div>

            <!-- Menu 4 -->
            <div class="card menu-item" style="width: 18rem;">
                <img src="{{ asset('images/americano.jpg') }}" class="card-img-top img-fluid" alt="Menu 4">
                <div class="card-body">
                    <h5 class="card-title">Americano</h5>
                    <p class="card-text">Harga : Rp10.000,-</p>
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
            <select class="form-control" id="menuSelection" name="menu_id" placeholder="Select a menu">
                <option value="" disabled selected>Select a menu</option>
                <option value="1">Roti Bakar</option>
                <option value="2">Wafel Coklat</option>
                <option value="3">Milky Matcha</option>
                <option value="4">Americano</option>
            </select>
        </div>

        <input type="hidden" class="form-control" id="username" name="username" value="{{ auth()->check() ? auth()->user()->username : '' }}" readonly>

        <div class="form-group">
            <label for="roomSelection">Room Selection</label>
            <select class="form-control" id="roomSelection" name="room" placeholder="Select a room">
                <option value="" disabled selected>Select a room</option>
                <option value="room1">Room 1</option>
                <option value="room2">Room 2</option>
            </select>
        </div>

        <div class="form-group">
            <label for="totalPrice">Total Price</label>
            <input type="text" class="form-control" id="totalPrice" name="total_price" readonly>
        </div>

        <br>
        <button type="submit" class="btn-custom">Place Order</button>
    </form>
</div>
<script>
    $(document).ready(function() {
        // Define menu prices
        const menuPrices = {
            '1': 13000,
            '2': 15000,
            '3': 12000,
            '4': 10000,
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