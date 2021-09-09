@extends('layouts.theme')
@section('menu-active-main','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

@foreach ($setting as $data)
@php
    $hos_name = $data->hos_name;
    $hos_url = $data->hos_url;
    $hos_tel = $data->hos_tel;
    $hos_facebook = $data->hos_facebook;
    $hos_youtube = $data->hos_youtube;
    $slide_1_text = $data->slide_1_text;
    $slide_2_text = $data->slide_2_text;
    $slide_3_text = $data->slide_3_text;
    $slide_1_more = $data->slide_1_more;
    $slide_2_more = $data->slide_2_more;
    $slide_3_more = $data->slide_3_more;
    $slide_1_picture = $data->slide_1_picture;
    $slide_2_picture = $data->slide_2_picture;
    $slide_3_picture = $data->slide_3_picture;
    $pr_1 = $data->pr_1;
    $pr_2 = $data->pr_2;
    $pr_3 = $data->pr_3;
    $pr_status = $data->pr_status;
    $slide_status = $data->slide_status;
    $dm_status = $data->dm_status;
@endphp
@endforeach

<div class="page-content header-clear-small">

        @if (session('session-alert'))
            <div class="footer card card-style">
                <a href="#" class="footer-title"><span class="color-highlight">{{ session('session-alert') }}</span></a>
                <div class="clear"><br></div>
            </div><br>
        @endif

        <!-- ข้อมูลทั่วไปผู้ป่วย -->
        <div class="card card-style">
            <div class="d-flex content">
                <div class="flex-grow-1">
                    <div>
                        <h2 class="font-700 mb-0">{{ $ptname }}</h2>
                        <p class="mb-0 pb-1 pr-3">
                            <strong class="color-theme pr-1">อายุ:</strong> {{ $age_year }} ปี<br>
                        </p>
                        <h2 class="font-700 mb-1">HN: {{ $hn }}</h2>
                    </div>
                </div>
                <div>
                    <img src="{{ $pic }}" data-src="{{ $pic }}" width="80" class="rounded-circle mt- shadow-xl preload-img">
                </div>
            </div>

            <div class="content mb-0">
                <div class="list-group list-custom-small list-icon-0">
                    <a data-toggle="collapse" href="#">
                        <i class="fa font-14 fa-address-card color-blue2-dark"></i>
                        <span class="font-14">สิทธิรักษา: <b>{{ $pttypename }}</b></span>
                    </a>
                </div>
                <div class="list-group list-custom-small list-icon-0">
                    <a data-toggle="collapse" href="#collapse-1">
                        <i class="fa font-14 fa-share-alt color-red2-dark"></i>
                        <span class="font-14">กรุ๊ปเลือด/แพ้ยา/โรคประจำตัว</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
                <div class="collapse" id="collapse-1">
                    <div class="list-group list-custom-small pl-3">
                        <a href="#">
                            <i class="fa font-14 fa-tint color-red2-dark"></i>
                            <span>กรุ๊ปเลือด: <b>{{ $bloodgrp }}</b></span>
                        </a>
                        <a href="#">
                            <i class="fa font-14 fa-pills color-red2-dark"></i>
                            <span>แพ้ยา: <b>{{ $drugallergy }}</b></span>
                        </a>
                        <a href="#">
                            <i class="fa font-14 fa-universal-access color-red2-dark"></i>
                            <span>โรคประจำตัว: <b>{{ $clinic }}</b></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- สไลด์โฆษณา -->
        @if (!isset($vn))
        @if ($slide_status == "Y")
        <div class="single-slider slider-boxed owl-carousel owl-no-dots">
            <div class="card rounded-m shadow-l">
                <div class="card-bottom text-center mb-0">
                    <h1 class="color-white font-700 mb-n1">{{ $slide_1_text }}</h1>
                    <p class="color-white opacity-80 mb-4">{{ $slide_1_more }}</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
                <img class="img-fluid" src="images/pictures/{{ $slide_1_picture }}">
            </div>
            <div class="card rounded-m shadow-l">
                <div class="card-bottom text-center mb-0">
                    <h1 class="color-white font-700 mb-n1">{{ $slide_2_text }}</h1>
                    <p class="color-white opacity-80 mb-4">{{ $slide_2_more }}</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
                <img class="img-fluid" src="images/pictures/{{ $slide_2_picture }}">
            </div>
                    <div class="card rounded-m shadow-l">
                <div class="card-bottom text-center mb-0">
                    <h1 class="color-white font-700 mb-n1">{{ $slide_3_text }}</h1>
                    <p class="color-white opacity-80 mb-4">{{ $slide_3_more }}</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
                <img class="img-fluid" src="images/pictures/{{ $slide_3_picture }}">
            </div>
        </div>
        @endif
        @endif

        <!-- แสดงคิวเมื่อมี visit วันนี้ -->
        @if (isset($vn))
        <a href="{{ url('/') }}/statusq?oappid={{ $user_app_id }}">
        <div data-card-height="210" class="card card-style rounded-m shadow-xl">
            <div class="card-center text-center">
            @if ($room_code == 0)
                <h1 class="color-white font-800 fa-5x text-shadow-l">{{ $webq }}</h1>
                @if ($q_status == "1")
                <h1 class="color-white font-800 text-shadow-l"><br>คิวของคุณ รออีก {{ $waitq }} คิว</h1>
                <h2 class="color-white font-800 text-shadow-l">{{ $department }}</h2>
                @elseif ($q_status == "2")
                <h1 class="color-white font-800 color-highlight text-shadow-l"><br>เรียกรับบริการ</h1>
                <h2 class="color-white font-800 text-shadow-l">{{ $department }}</h2>
                @else
                <h1 class="color-white font-800 color-green2 text-shadow-l"><br>เสร็จสิ้นการรับบริการแล้ว</h1>
                <h2 class="color-white font-800 text-shadow-l">เวลา {{ $time }}</h2>
                @endif
            </div>
            <p class="card-bottom text-center mb-0 pb-2 color-white font-15 text-shadow-s">
                แผนก: {{ $spcltyname }}
            </p>
            @else
                <h1 class="color-white font-800 color-green2 text-shadow-l"><br>เสร็จสิ้นการรับบริการแล้ว</h1>
                <h2 class="color-white font-800 text-shadow-l">เวลา {{ $time }}</h2>
                </div></a>
            @endif

            <div class="card-overlay bg-gradient opacity-70"></div>
            <div class="card-overlay bg-gradient bg-gradient-{{ $pri_color }}1 opacity-80"></div>
            <img class="img-fluid" src="images/logo-neoq3.png">

        </div>
        @endif

        <!-- วันนี้คุณมีนัด -->
        @if ($user_app_check == "Y")
        <div class="card card-style shadow-xl rounded-m">
            <div class="cal-footer">
                <h4 class="cal-title text-center text-uppercase font-25 bg-red2-dark color-white">วันนี้คุณมีนัด</h6>
                <span class="cal-message mt-3 mb-3">
                    <i class="fa fa-bell font-18 color-green1-dark"></i>
                    <strong class="color-gray-dark">กด "ดูบัตรนัด" และสามารถออกหมายเลขคิวอัตโนมัติ</strong>
                    <strong class="color-gray-dark">และชั่งน้ำหนัก วัดส่วนสูง วัดความดัน รอเรียกที่แผนกนัด</strong>
                </span>
                <div class="content mb-0">

                </div>
                <a href="{{ url('/') }}/oappdetail?oappid={{ $user_app_id }}" class="btn btn-m btn-full rounded-s shadow-l text-center text-uppercase font-25 bg-green1-dark color-white">ดูบัตรนัด</a>

            </div>
        </div>
        @endif

        <div class="row text-center mb-0">
            <a href="{{ url('/') }}/card" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-2">
                    <img class="img-fluid" src="images/menu_v2_card.png">
                </div>
            </a>
<<<<<<< HEAD
            <a href="{{ url('/') }}/emr" class="col-6 pl-0">
=======
            <a href="#" class="col-6 pl-0">
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
                <div class="card card-style ml-2 mb-3">
                    <img class="img-fluid" src="images/menu_v2_emr.png">
                </div>
            </a>
            <a href="{{ url('/') }}/oapp" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-2">
                    <img class="img-fluid" src="images/menu_v2_oapp.png">
                </div>
            </a>
<<<<<<< HEAD
            <a href="{{ url('/') }}/vaccine" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3">
                    <img class="img-fluid" src="images/menu_v2_vaccine.png">
                </div>
            </a>

            <a href="{{ url('/') }}/book" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-2">
                    <img class="img-fluid" src="images/book.png">
                </div>
            </a>
            <a href="{{ url('/') }}/other" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3">
                    <img class="img-fluid" src="images/menu_v2_other.png">
                </div>
            </a>


=======
            <!--<a href="{{ url('/') }}/book" class="col-6 pl-0">-->
            <a href="{{ url('/') }}/vaccine" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3">
                    <img class="img-fluid" src="images/menu_v2_covid19.png">
                </div>
            </a>
{{--
            <a href="#" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-2">
                    <i class="fa fa-stethoscope color-green1-dark fa-3x mt-5"></i>
                    <h1 class="pt-4">ตรวจสุขภาพ</h1>
                    <p class="font-11 opacity-50 mt-n1">ผลตรวจสุขภาพ</p>
                </div>
            </a>
            <a href="#" id="openWindowWeb" onclick="openWindowWeb()" class="col-6 pl-0">
                <div class="card card-style ml-2 mb-3">
                    <i class="fa fa-globe color-blue2-dark fa-3x mt-5"></i>
                    <h1 class="pt-4">เว็บไซต์</h1>
                    <p class="font-11 opacity-50 mt-n1">เว็บโรงพยาบาล</p>
                </div>
            </a>
 --}}
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
            <a href="tel:1669" class="col-6 pr-0">
                <div class="card card-style mr-2 mb-2">
                    <img class="img-fluid" src="images/1669-4.png">
                </div>
            </a>
            <a target="_blank" href="http://eservices.nhso.go.th/eServices/mobile/login.xhtml" class="col-6 pl-0">
                <div class="card card-style ml-2">
                    <img class="img-fluid" src="images/menu_v2_nhso.png">
                </div>
            </a>
        </div>

        @if ($pr_status == "Y")
        <div class="card card-style">
            <div class="content mb-4">
                <h1 class="text-center color-highlight mb-0">ประชาสัมพันธ์</h1>
                <p class="text-center color-highlight font-11 mt-n1 pb-0"></p>

                <div class="single-slider slider-boxed owl-carousel owl-no-dots">
                    <h2 class="text-center font-300 line-height-xl content mb-0 mt-0">
                        {{ $pr_1 }}
                    </h2>
                    <h2 class="text-center font-300 line-height-xl content mb-0 mt-0">
                        {{ $pr_2 }}
                    </h2>
                    <h2 class="text-center font-300 line-height-xl content mb-0 mt-0">
                        {{ $pr_3 }}
                    </h2>
                </div>
                @if ($hos_url || "")
                <p class="text-center color-highlight font-11 mt-n1 pb-0">
                    <a target="_blank" href="{{ $hos_url }}">ข้อมูลเพิ่มเติม</a>
                </p>
                @endif

            </div>
        </div>
        @endif

        @if ($dm_status == "Y")
        <div class="card card-style">
            <div class="content mt-0 mb-0">
                <div class="list-group list-custom-large">
                    <a href="#" data-toggle-theme data-trigger-switch="switch-4" class="border-0">
                        <i class="fa font-12 fa-moon rounded-s bg-highlight color-white mr-3"></i>
                        <span class="font-600">Dark Mode</span>
                        <strong>โหมดกลางคืน</strong>
                        <div class="custom-control scale-switch ios-switch">
                            <input data-toggle-theme-switch type="checkbox" class="ios-input" id="switch-4">
                            <label class="custom-control-label" for="switch-4"></label>
                        </div>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        @endif

        <div class="footer card card-style">
            <a href="#" class="footer-title"><span>ติดต่อโรงพยาบาล</span></a>
            <p class="footer-text"><span>บริการด้วยใจ <i class="fa fa-heart color-highlight font-16 pl-2 pr-2"></i> ห่วงใยสุขภาพคุณ</span></p>
            <div class="text-center mb-3">
                @if ($hos_facebook || "")
                <a target="_blank" href="{{ $hos_facebook }}" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
                @endif
                @if ($hos_youtube || "")
                <a target="_blank" href="{{ $hos_youtube }}" class="icon icon-xs rounded-sm shadow-l mr-1 bg-red2-dark"><i class="fab fa-youtube"></i></a>
                @endif
                @if ($hos_url || "")
                <a target="_blank" href="{{ $hos_url }}" class="icon icon-xs rounded-sm mr-1 shadow-l bg-twitter"><i class="fa fa-share-alt"></i></a>
                @endif
                @if ($hos_tel || "")
                <a href="tel:{{ $hos_tel }}" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
                @endif
            </div>
            <p class="footer-text">{{ $hos_name }} <br>โทรศัพท์ {{ $hos_tel}}</p>
            <p class="footer-copyright">{!! config('app.copyright') !!}</p>

            @if ($isadmin == "A")
<<<<<<< HEAD

            {{-- <a href="#" onclick="event.preventDefault();
                document.getElementById('msg-form').submit();"
                class="btn btn-m btn-center-l text-uppercase font-900 bg-pink2-dark rounded-sm shadow-xl mt-4 mb-0">ประกาศข่าวสมาชิก LineOA</a>
                <!--<form id="msg-form" action="https://restful.tphcp.go.th/smarthospital/flex_form.php" method="POST" class="d-none">-->
                <form id="msg-form" action="https://restful.tphcp.go.th/smarthospital/flex_form_picture.php" method="POST" class="d-none">
                    @csrf
                    <input type="hidden" name="isadmin" value="isadmin">
                </form> --}}

            <!--<a href="https://restful.tphcp.go.th/smarthospital/flex_form.php" class="btn btn-m btn-center-l text-uppercase font-900 bg-pink2-dark rounded-sm shadow-xl mt-4 mb-0">ประกาศข่าวสมาชิก LineOA</a>-->
=======
>>>>>>> f12a0e8bdfc853b0ae25016c4836a5b0b4aae427
            <a href="{{ url('/') }}/setting" class="btn btn-m btn-center-l text-uppercase font-900 bg-red2-dark rounded-sm shadow-xl mt-4 mb-0">Setting</a>
            <a href="{{ url('/') }}/userman" class="btn btn-m btn-center-l text-uppercase font-900 bg-blue2-dark rounded-sm shadow-xl mt-4 mb-0">จัดการผู้ดูแล</a>
            @endif
            @if ($isadmin == "A" OR $isadmin == "M")
            <a href="{{ url('/') }}/oappman" class="btn btn-m btn-center-l text-uppercase font-900 bg-green1-dark rounded-sm shadow-xl mt-4 mb-0">นัดออนไลน์รอยืนยัน <span class="badge badge-light">{{ $oapp_wait_confirm }}</span></a>
            @endif

            <div class="clear"><br></div>
        </div>

    </div>
    <!-- End of Page Content-->

@endsection

@section('footer_script')

<!-- //LIFF Script -->
<!-- <script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script> -->

<script>

//   async function main() {
//       await liff.init({ liffId: "1654181242-WLYbaypY" })
//       if (liff.isLoggedIn()) {
//         getUserProfile()
//       } else {
//         liff.login({ redirectUri: "https://api.tphcp.go.th/sticky-mobile/public/home"})
//       }
//   }
//   main()

  async function scanCode() {
    const result = await liff.scanCode()
    $('#scanCode').val(result.value);
  }

  function openWindowWEB() {
    liff.openWindow({
      url: "https://www.tphcp.go.th",
      external: true
    })
  }

  function openWindowNHSO() {
    liff.openWindow({
      url: "http://eservices.nhso.go.th/eServices/mobile/login.xhtml",
      external: true
    })
  }

  function getEnvironment() {
    if (liff.isInClient()) {
    //   document.getElementById("btnCloseApp").style.display = "none"
    } else {
      document.getElementById("btnScanCode").style.display = "none"
    }
  }

</script>
<!-- LIFF Script// -->

@endsection
