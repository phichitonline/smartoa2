@extends('layouts.theme')
@section('menu-active-main','active-nav')
@section('menu-active',' color-gray1-dark')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="header header-fixed header-logo-center bg-blue2-dark">
    <a href="#" onclick="goBack()" class="header-title color-white">ตรวจตอบอีกครั้ง</a>
    <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-bell"></i></a>
</div>

<div class="page-content header-clear-large">

@if (session('session-alert'))
    <div class="card card-style shadow-xl rounded-m">
        <div class="cal-footer">
            <h4 class="cal-title text-center text-uppercase font-25 bg-green2-dark color-white">{{ session('session-alert') }}</h4>

            <div class="content mb-0">
                <div class="clear"></div>
                <h4>ชื่อ : {{ $prename }}{{ $name }}</h4>
                <h4>อายุ : {{ $age }} ปี</h4>
                <h4>เลขบัตรประชาชน : {{ $cid }}</h4>
                <h4 class="color-highlight">วันนัด : {{ DateThaiFull($slotdate) }} เวลา {{ $slottime }} น.</h4>
                <h4>สถานที่ : โรงพยาบาลสมเด็จพระยุพราชตะพานหิน (ตึกฟอกไต)</h4>
                <div class="clear"></div>
            </div>

            <div class="clear"><br></div>

        </div>
    </div>
    <div class="card card-style shadow-xl rounded-m">
        <div class="cal-footer">
            <h4 class="cal-title text-center text-uppercase font-25 bg-blue2-dark color-white">คำแนะนำ</h4>

            <div class="content mb-0">
                <div class="clear"></div>
                <h5>เป็นเพื่อนกับ Line Official ของโรงพยาบาล ลงทะเบียนเพื่อเตรียมตัวรับบริการ และรับการแจ้งเตือน</h5>
                <h5><a href="https://lin.ee/hD2Xgo4">คลิกที่นี่</a> หรือสแกน QR Code</h5>
                <img class="rounded-m preload-img shadow-l img-fluid" src="images/tphcp-lineoa.png" alt="">
                <div class="clear"></div>
            </div>

            <div class="clear"><br></div>

        </div>
    </div>
@endif

</div>
<!-- End of Page Content-->

@endsection


@section('footer_script')

<script>
    function goBack() {
      window.history.back();
    }
</script>

@endsection
