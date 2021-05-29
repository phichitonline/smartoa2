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

                <div class="card card-style shadow-xl rounded-m">
                    <div class="cal-footer">
                        <h4 class="cal-title text-center text-uppercase font-25 bg-green2-dark color-white">{{ $moduletitle }}</h4>

                        <div class="content mb-0">
                            <div class="input-style has-icon input-style-2 input-required">
                                <i class="input-icon fa fa-address-card color-theme"></i>
                                <span class="color-highlight input-style-1-active">เลขบัตรประจำตัวประชาชน</span>
                                <input class="form-control" type="tel" value="{{ $cid }}">
                            </div>
                            <div class="input-style has-icon input-style-2 input-required">
                                <i class="input-icon fa fa-lock color-theme"></i>
                                <span class="color-highlight input-style-1-active">วันเดือนปี พ.ศ.เกิด</span>
                                <input class="form-control" type="tel" value="{{ $birthday }}">
                            </div>
                        </div>

                    </div>
                </div>

</div>

@endsection

@section('footer_script')


@endsection
