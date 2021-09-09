@extends('layouts.theme')
@section('menu-active-vac','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

    <div class="card card-style">
        <div class="d-flex content">
            <div class="flex-grow-1">
                <div>
                    <h1 class="font-700 mb-1">{{ $moduletitle }}</h1>
                    <p class="mb-0 pb-1 pr-3">
                        {{ $ptname }}
                    </p>
                </div>
            </div>
            <div>
<<<<<<< HEAD
                <img src="{{ $pic }}" data-src="{{ $pic }}" width="50" class="rounded-circle mt- shadow-xl preload-img">
=======
                <img src="{{ $pic }}" data-src="{{ $pic }}" width="80" class="rounded-circle mt- shadow-xl preload-img">
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
                {{-- <img src="images/empty.png" data-src="images/pictures/faces/4s.png" width="80" class="rounded-circle mt- shadow-xl preload-img"> --}}
            </div>
        </div>
    </div>

    <div class="card card-style">
        <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large list-icon-0">
                @foreach ($visit_list as $data)
                <a href="{{ route('emr.show', $data->vn) }}">
                    @if ($data->an !== NULL)
                        <i class="fa font-19 fa-bed rounded-s color-red1-dark"></i>
                        <span class="color-red2-dark">{{ DateThaiShort($data->vstdate) }} (ผู้ป่วยใน)</span>
                        <strong class="color-red2-dark">{{ $data->cc }}</strong>
                    @else
                        @if (strpos($data->visitdiag, "Z000") === FALSE)
                            <i class="fa font-19 fa-stethoscope rounded-s color-green1-dark"></i>
                            <span>{{ DateThaiShort($data->vstdate) }}</span>
                            <strong>{{ $data->cc }}</strong>
                        @else
                            <i class="fa font-19 fa-user-md rounded-s color-blue1-dark"></i>
                            <span>{{ DateThaiShort($data->vstdate) }}</span>
                            <strong>{{ $data->cc }}</strong>
                        @endif
                    @endif

<<<<<<< HEAD
=======
                    {{-- <span>{{ DateThaiShort($data->vstdate) }} @if ($data->an !== NULL) {{ "(ผู้ป่วยใน)" }} @endif</span>
                    <strong>{{ $data->cc }}</strong> --}}
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
                    <i class="fa fa-chevron-right opacity-30"></i>
                </a>
                @endforeach
            </div>
        </div>
    </div>


<<<<<<< HEAD
    {{-- <div class="card card-style">
=======
    <div class="card card-style">
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
        <div class="content mb-0 mt-0">
            <div class="list-group list-custom-large list-icon-0">
                <a href="#">
                    <i class="fa font-19 fa-user-md rounded-s color-blue2-dark"></i>
                    <span>Settings</span>
                    <strong>Show Sticky Mobile Settings</strong>
                    <i class="fa fa-chevron-right opacity-30"></i>
                </a>
                <a href="#">
                    <i class="fa font-19 fa-tint rounded-s color-red2-dark"></i>
                    <span>Color Scheme</span>
                    <strong>Show Sticky Mobile Color Options</strong>
                    <i class="fa fa-chevron-right opacity-30"></i>
                </a>
                <a href="#">
                    <i class="fa font-19 fa-brush rounded-s color-green1-dark"></i>
                    <span>Background Scheme</span>
                    <strong>Show Sticky Mobile Color Options</strong>
                    <i class="fa fa-chevron-right opacity-30"></i>
                </a>
            </div>
        </div>
<<<<<<< HEAD
    </div> --}}
=======
    </div>
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427

    <div class="footer card card-style">
        <a href="#" class="footer-title"><span class="color-highlight">หมายเหตุ</span></a>
        <p class="footer-text">
            <span>แสดงประวัติการรับบริการทั่วไปล่าสุดไม่เกิน 1 ปี
                <br>ประวัติตรวจสุขภาพประจำปีครบทุกครั้ง
            </span>
        <div class="clear"></div>
    </div>
</div>
<!-- End of Page Content-->

@endsection

@section('footer_script')

@endsection
