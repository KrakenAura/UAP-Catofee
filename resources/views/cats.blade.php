@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('css/cat_style.css') }}">
@endsection


@section('content')
<div class="hero">
    <h1>Temui Kucing Kami</h1>
</div>

<!-- First Block -->
<div class="cats text-center t-4 custom-width" id="cats-section">
    <div class="row gx-0 justify-content-start">
        <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
            <img src="{{ asset('images/Hinnss.png') }}" alt="" class="img-fluid rounded-border-white" width="30%" style="margin-right: 3rem; margin-left: 12rem" />
            <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-start">
                <h5 style="margin-top: 5rem;">Hinnss</h5>
                <p style="width: auto;">Hinns adalah kucing pemalu yang suka bersembunyi di pojokan. Namun, begitu dia merasa aman, dia akan keluar dan menunjukkan sisi manisnya. Cobalah memberinya sedikit waktu, dan Anda akan melihat betapa menawan kepribadiannya.</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row gx-0 justify-content-end">
        <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
            <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-end">
                <h5 style="margin-top: 5rem;">Jamal</h5>
                <p style="width: auto;">Jamal adalah kucing yang selalu ceria dan ramah. Dia suka bermain dengan mainan dan sangat disukai oleh pengunjung kafe.</p>
            </div>
            <img src="{{ asset('images/Jamal.png') }}" alt="" class="img-fluid rounded-border-white" width="30%" style="margin-right: 5rem; margin-left: 5rem" />
        </div>
    </div>
</div>

<!-- Second Block -->
<div class="cats2 text-center t-4 custom-width" id="cats-section" style="margin-top: 5rem ;">
    <div class="row gx-0 justify-content-start">
        <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
            <img src="{{ asset('images/fruity.png') }}" alt="" class="img-fluid rounded-border-black" width="30%" style="margin-right: 3rem; margin-left: 12rem" />
            <div class="col-md-6 mb-3 d-flex flex-column align-items-start text-start">
                <h5 style="margin-top: 5rem;">Fruity</h5>
                <p style="width: auto;">Fruity adalah kucing kecil yang penuh kasih sayang. Dengan bulu lembut dan matanya yang penuh kehangatan, Fruity suka berada di pangkuan pengunjung, memberikan kelembutan yang membuat hati Anda hangat.</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row gx-0 justify-content-end">
        <div class="col-md-10 mb-3 d-flex flex-row align-items-start text-center">
            <div class="col-md-6 mb-3 d-flex flex-column align-items-end text-end">
                <h5 style="margin-top: 5rem;">Faizah</h5>
                <p style="width: auto;">Faizah adalah kucing penjelajah sejati. Dengan bulu lebat dan mata tajam, dia senang berkeliling cafe, menyelidiki setiap sudut dan celah. Jangan terkejut jika dia mendekati Anda dengan tatapan ingin tahu, siap untuk bercengkerama.</p>
            </div>
            <img src="{{ asset('images/faizah.png') }}" alt="" class="img-fluid rounded-border-black" width="30%" style="margin-right: 3rem; margin-left: 5rem" />
        </div>
    </div>

    <br>
    <br>

</div>
@endsection