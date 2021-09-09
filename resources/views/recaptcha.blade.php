@extends('layouts.theme')
@section('menu-active-register','active-nav')
@section('menu-active',' color-gray1-dark')
@section('header_script')
{{-- Google Recaptcha --}}
<script src="https://www.google.com/recaptcha/api.js?hl=th" async defer></script>
@endsection

@section('content')

<div class="page-content header-clear-small">

@if (Session::has('session-alert'))
        <div class="footer card card-style">
            <a href="#" class="footer-title"><span class="text-success">{{ Session::get('session-alert') }}</span></a>
            <br/>
            <a href="#" class="footer-title"><span>{{ Session::get('session-alert-cid') }}</span></a>
<<<<<<< HEAD
=======
            <a href="#" class="footer-title"><span class="text-{{ Session::get('session-alert-cid-chk-c') }}">{{ Session::get('session-alert-cid-chk') }}</span></a>
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
            <a href="#" class="footer-title"><span>{{ Session::get('session-alert-birthday') }}</span></a>
            <div class="clear"><br></div>
        </div><br>
@endif

{{-- <div class="page-content header-clear-small"> --}}

            <form method="POST" action="{{ route('recaptcha.store') }}" autocomplete="off" class="form-horizontal">
                @csrf
                @method('POST')

                <div class="card card-style shadow-xl rounded-m">
                    <div class="cal-footer">
                        <h4 class="cal-title text-center text-uppercase font-25 bg-blue2-dark color-white">ตรวจสอบข้อมูลลงทะเบียน</h4>

                        <div class="content mb-0">
                            <div class="input-style has-icon input-style-2 input-required">
                                <i class="input-icon fa fa-address-card color-theme"></i>
                                <span class="color-highlight input-style-1-active">เลขบัตรประจำตัวประชาชน</span>
                                <em>(required)</em>
                                <input class="form-control" type="tel" name="cid" value="{{ old('cid') }}" placeholder="เลขบัตรประชาชน 13 หลัก" autofocus>
                                <small class="text-danger">{{ $errors->first('cid') }}</small>
                            </div>
                            <div class="input-style has-icon input-style-2 input-required">
                                <i class="input-icon fa fa-lock color-theme"></i>
                                <span class="color-highlight input-style-1-active">วันเดือนปี พ.ศ.เกิด</span>
                                <em>(required)</em>
                                <input class="form-control" type="tel" name="birthday" value="{{ old('birthday') }}" placeholder="รูปแบบเป็นปี พ.ศ.เช่น 31122530">
                                <small class="text-danger">{{ $errors->first('birthday') }}</small>
                            </div>
                        </div>
                        <div class="content mb-0">
<<<<<<< HEAD
                            @if (Session::has('g-recaptcha-response'))
                                <small class="text-danger">{{ Session::get('g-recaptcha-response') }}
                            @endif
                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
=======
                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                            @if (Session::has('g-recaptcha-response'))
                                <small class="text-danger">{{ Session::get('g-recaptcha-response') }}</small>
                            @else
                                <small>***กรุณาคลิกเพื่อยืนยันตัวตน***</small>
                            @endif
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
                            <br/>
                        </div>

                        <button type="submit" class="btn scale-box mt-3 btn-center-l rounded-l shadow-xl bg-blue2-dark font-800 text-uppercase">ตรวจสอบข้อมูล</button>
                        <div class="clear"><br></div>

                    </div>
                </div>

            </form>

</div>

@endsection

@section('footer_script')


@endsection
