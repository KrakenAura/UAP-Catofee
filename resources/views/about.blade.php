@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about_style.css') }}">
@endsection

@section('content')
<div class="hero">
    <h1>Tentang Kami</h1>
    <p>Selamat datang di Cattofee, tempat di mana keindahan kucing bertemu dengan kelezatan kopi dalam suasana yang hangat dan ramah. Kami adalah destinasi unik yang menggabungkan cinta akan kucing dengan pengalaman santai bersantap dan bersosialisasi. Di sini, setiap cangkir kopi dan setiap kucing memiliki cerita sendiri yang menarik.</p>
</div>

<br>
<br>
<!-- short story -->
<div class="story">
    <h3>Our Short Story</h3>
    <p>Pada suatu hari yang cerah, lima teman dekat yang tergila-gila pada kucing, yaitu Brahman, Rafid, Karim, Adit, dan Nadia, mengumpulkan semua energi dan cinta mereka untuk mewujudkan impian bersama. Mereka memiliki obsesi bersama terhadap kucing dan bermimpi untuk menciptakan tempat unik di mana orang-orang dapat bersantai sambil menikmati kehadiran kucing yang lucu.
    </p>
    <p>Bersama-sama, lima sahabat ini menghadirkan kafe kucing yang tidak hanya memenuhi keinginan pengunjung untuk bersantai, tetapi juga memberikan rumah baru bagi kucing-kucing yang memerlukan kasih sayang. Cattofee bukan hanya tempat untuk menikmati secangkir kopi, tetapi juga rumah bagi komunitas pecinta kucing yang berbagi kebahagiaan dan kecintaan pada hewan berbulu.</p>
</div>
<br><br>
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

<!-- Contact  -->
<div class="contact-us">
    <h2>Contact Us</h2>
    <p>Jika ada pertanyaan, silahkan hubungi kami melalui kontak berikut :</p>

    <ul>
        <li>Email: info@cattofee.com</li>
        <li>Phone: 081717554321</li>
        <li>Address: Komplek Universitas Muhammadiyah Malang, Jl. Raya Tlogomas No.246, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur</li>
    </ul>
</div>

@endsection