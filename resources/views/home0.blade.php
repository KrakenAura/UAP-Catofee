@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
@endsection

@section('content')
<div class="hero">
    <h1>Teman Nongkrong</h1>
    <h1>Beda dari Lainnya</h1>
    <p>Kucing memiliki kepribadian yang tenang sehingga cocok</p>
    <p>dijadikan sebagai teman bersantai sembari menikmati kopi</p>
    <p>melepas penat dan beban hidup.</p>
    <!-- Add more content or customize as needed -->
    <form method="GET" action="{{ url('/login') }}" class="left-bot-btn">
        @csrf
        <button type="submit" class="button btn btn-outline-warning mx-2">Reservasi Sekarang</button>
    </form>
</div>
<!-- The Cats -->
<div class="cats text-center t-4 custom-width" id="cats-section">
    <h1>The Cats</h1>
    <p>Kucing-kucing di kafe kucing kami dirawat dengan penuh perhatian dan kasih sayang,</p>
    <p style="margin-top: -1rem; margin-bottom: 50px;">memastikan bahwa mereka berada dalam kondisi kesehatan yang optimal.</p>
    <div class="row gx-0 justify-content-center">
        <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-center pe-3">
            <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid" width="40%" />
            <h5 style="margin-right: 7.5rem;">Jamal</h5>
        </div>
        <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-center ps-3">
            <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid" width="40%" />
            <h5 style="margin-left: 7.5rem;">Jamal</h5>
        </div>
        <button type="button" class="btn btn-primary btn-lg custom-large-button" style="margin-top: 40px;" onclick="window.location.href='/cats'">Lihat Lainya >>></button>
    </div>
</div>

<div class="operating-hour text-center custom-width" id="operating-hours-section">
    <h1>Operating Hours</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Weekdays</h1>
            <p>Senin - Jumat</p>
            <p>08.00 - 21.00</p>
            <p>Rp.30.000/jam/orang</p>
        </div>
        <div class="col-md-6">
            <h1>Weekdays</h1>
            <p>Sabtu &amp Minggu</p>
            <p>09.00 - 22.00</p>
            <p>Rp.50.000/jam/orang</p>
        </div>
    </div>
</div>

@endsection