@extends('layouts.theme')
@section('menu-active-register','active-nav')
@section('menu-active',' color-gray1-dark')
@section('header_script')
{{-- header --}}
{{-- Google Recaptcha --}}
<script src="https://www.google.com/recaptcha/api.js?hl=th" async defer></script>
@endsection

@section('content')

<div class="page-content header-clear-small">

    <div class="card card-style">
        <div class="content mb-0">
            <h1 class="text-center font-900 font-40 text-uppercase mb-0">ลงทะเบียน</h1>
            <p class="text-center color-highlight font-11"><br>กรุณากรอกข้อมูลตรวจสอบเพื่อลงทะเบียน</p>

            <form action="{{ route('recaptcha.store') }}" method="POST">
                @csrf
                @method('post')

                <div class="form-row">
                <div class="form-group col-md-4 input-style has-icon input-style-2 input-required">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <span>ข้อมูล input1</span>
                    <em>(required)</em>
                    <input type="text" name="input1" placeholder="กรอกข้อมูล" value="{{ old('input1')}}" required autofocus>
                    <small class="text-danger">{{ $errors->first('input1') }}</small>
                </div>
                </div>

                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
                <br/>
                <input type="submit" value="Submit">
            </form>

            <div class="clear"><br></div>

        </div>
    </div>

</div>

@endsection

@section('footer_script')


@endsection
