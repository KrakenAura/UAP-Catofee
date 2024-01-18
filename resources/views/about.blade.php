@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about_style.css') }}">
@endsection

@section('content')
<div class="hero">
    <h1>Tentang Kami</h1>
    <p>Selamat datang di Cattofee, tempat di mana keindahan kucing bertemu dengan kelezatan kopi dalam suasana yang hangat dan ramah. Kami adalah destinasi unik yang menggabungkan cinta akan kucing dengan pengalaman santai bersantap dan bersosialisasi. Di sini, setiap cangkir kopi dan setiap kucing memiliki cerita sendiri yang menarik.</p>
</div>

<!-- Maps Section -->
<div class="row align-items-center justify-content-center">
    <br>
    <br>
    <div class="col-xl-6 " style="text-align: center;">
        <h1>Come and Join Us</h1>
    </div>
    <div class="col-xl-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.728701633626!2d112.60159269999998!3d-7.923380199999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883f803974f03%3A0x37b3b2d18ebec00!2sKontainer%20Cafe%20UMM!5e0!3m2!1sid!2sid!4v1705572333002!5m2!1sid!2sid" width="600" height="450" style="border:0; padding: 1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection