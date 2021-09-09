@extends('layouts.theme')
@section('menu-active-main','')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

<a data-card-height="150" data-lightbox="gallery-1" class="card card-style preload-img" data-src="images/covid-19-vaccine-vial-injection_1419-2109.jpg" href="#" title="">
    <div class="card-center text-center">
        <h1 class="color-white mb-0 color-highlight">ตรวจสอบวันนัดฉีดวัคซีน<br>โควิด-19</h1>
    </div>
    <div class="card-overlay bg-white opacity-20"></div>
</a>

@if (session('session-alert'))
    <div class="footer card card-style">
        <a href="#" class="footer-title"><span class="color-highlight">{{ session('session-alert') }}</span></a>
        <div class="clear"><br></div>
    </div><br>
@endif

@if (session('session-alert-cid'))
<div class="header header-fixed header-logo-center bg-red1-dark">
    <a href="#" class="header-title color-white">Invalid CID</a>
    <a href="#" class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-bell"></i></a>
</div>
    <div class="footer card card-style">
        <a href="#" class="footer-title"><span class="color-highlight">{{ session('session-alert-cid') }}</span></a>
        <div class="clear"><br></div>
    </div><br>
@endif


<form method="GET" action="{{ route('cocheck') }}" autocomplete="off" class="form-horizontal">
    @csrf
    {{-- @method('post') --}}

    <div class="card card-style shadow-xl rounded-m">
        <div class="cal-footer">
            <h4 class="cal-title text-center text-uppercase font-25 bg-blue2-dark color-white">{{ $moduletitle }}</h4>

            <div class="content mb-0">
                <div class="input-style has-icon input-style-2 input-required">
                    <i class="input-icon fa fa-address-card color-theme"></i>
                    <span class="color-highlight input-style-1-active">เลขบัตรประจำตัวประชาชน</span>
                    <em>(required)</em>
                    <input class="form-control" type="tel" name="cid" placeholder="เลขบัตรประชาชน 13 หลัก" required autofocus>
                </div>

            </div>

            <button type="submit" class="btn scale-box mt-3 btn-center-l rounded-l shadow-xl bg-blue2-dark font-800 text-uppercase">ตรวจสอบข้อมูล</button>
            <div class="clear"><br></div>

        </div>
    </div>

</form>



</div>
<!-- End of Page Content-->

@endsection


@section('footer_script')


@endsection
