@extends('layouts.theme')
@section('menu-active-vac','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="header header-fixed header-logo-center bg-blue2-dark">
    <a href="#" data-back-button class="header-title color-white">ย้อนกลับ</a>
    <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    <a href="#" data-back-button class="header-icon header-icon-4"><i class="fas fa-stethoscope"></i></a>
</div>

<div class="page-content header-clear-medium">

    @foreach ($visit_detail as $data)

    <div class="card card-style">
        <div class="content mt-3 mb-2">
            <h1 class="vcard-title color-highlight">ตรวจร่างกาย</h1>
            <div class="vcard-field"><strong>น้ำหนัก(กก.)/ส่วนสูง(ซม.)</strong><a href="#">{{ $data->height }}/{{ $data->bw }}</a><i class="fa fa-phone"></i></div>
            <div class="vcard-field"><strong>อุณหภูมิ(องศาเซลเซียส)</strong><a href="#">{{ $data->temperature }}</a><i class="fa fa-suitcase"></i></div>
            <div class="vcard-field border-0"><strong>ความดัน(มิลลิเมตรปรอท)</strong><a href="#">{{ $data->bps }}/{{ $data->bpd }}</a><i class="fa fa-user"></i></div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mt-3 mb-2">
            <h1 class="vcard-title color-highlight pb-3">การวินิจฉัย/รักษา</h1>
            {{-- <div class="vcard-field line-height-l pb-3"><strong>Work</strong><a href="tel:+1 234 567 890">Milky Way, Planet Earth, <br> 2134 UltraMobile Street</a><i class="fa fa-map-marker mt-n2"></i></div>
            <div class="vcard-field line-height-l pb-3 pt-4 border-0"><strong>Home</strong><a href="tel:+1 234 567 890">Milky Way, Planet Earth, <br> 1234 Enabled Avenue</a><i class="fa fa-map-marker mt-3"></i></div> --}}
        </div>
    </div>
    <div class="card card-style">
        <div class="content mt-3 mb-2">
            <h1 class="vcard-title color-highlight">รายการยา</h1>
            {{-- <div class="vcard-field"><strong>Home</strong><a href="mailto:home@domain.com">home@domain.com</a><i class="fa fa-home"></i></div>
            <div class="vcard-field"><strong>Office</strong><a href="mailto:office@domain.com">office@domain.com</a><i class="fa fa-suitcase"></i></div>
            <div class="vcard-field border-0"><strong>Personal</strong><a href="mailto:personal@domain.com">personal@domain.com</a><i class="fa fa-user"></i></div> --}}
        </div>
    </div>
    <div class="card card-style">
        <div class="content mt-3 mb-2">
            <h1 class="vcard-title color-highlight">ผลตรวจ LAB, X-Ray</h1>
            {{-- <div class="vcard-field"><strong>Facebook</strong><a href="www.enableds.com">karla.black</a><i class="fab fa-facebook"></i></div>
            <div class="vcard-field"><strong>Twitter</strong><a href="www.enableds.com">@karla.black</a><i class="fab fa-twitter"></i></div>
            <div class="vcard-field border-0"><strong>Google Plus</strong><a href="www.enableds.com">@karla.black</a><i class="fab fa-google-plus"></i></div> --}}
        </div>
    </div>
    @endforeach

</div>
<!-- End of Page Content-->


@endsection

@section('footer_script')

@endsection
