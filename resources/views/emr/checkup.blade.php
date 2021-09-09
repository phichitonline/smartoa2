@extends('layouts.theme')
@section('menu-active-vac','active-nav')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

@foreach ($visit_detail as $data)

<div class="header header-fixed header-logo-center bg-blue2-dark">
    <a href="#" class="header-title color-white">{{ DateThaiShort($data->vstdate) }}</a>
    <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    <a href="#" class="header-icon header-icon-4"><i class="fas fa-stethoscope"></i></a>
</div>

<div class="page-content header-clear-medium">

    {{-- <div class="row text-center mb-0 mt-n2">
        <a href="#" data-menu="menu-transaction-transfer" class="col-6 pr-0">
            <div class="card card-style mr-2 mb-3">
                <i class="fa fa-arrow-up color-magenta2-dark fa-2x mt-3"></i>
                <h1 class="pt-2 font-18">Transfer</h1>
                <p class="font-11 opacity-50 mt-n2 mb-3">Tap to Transfer Funds</p>
            </div>
        </a>
        <a href="#" data-menu="menu-transaction-request" class="col-6 pl-0">
            <div class="card card-style ml-2 mb-3">
                <i class="fa fa-arrow-down color-highlight fa-2x mt-3"></i>
                <h1 class="pt-2 font-18">Request</h1>
                <p class="font-11 opacity-50 mt-n2 mb-3">Tap to Request Funds</p>
            </div>
        </a>
    </div> --}}

    <div class="card card-style">
        <div class="content mb-0">
            <h4 class="font-700 text-uppercase font-12 opacity-30 mb-3 mt-n2">ตรวจร่างกาย</h4>

            <div class="divider mt-2 mb-3"></div>
            <div class="row mb-0">
                <div class="col-4">
                    <div class="mx-0 mb-0">
                        <h6 class="font-14 font-700">ความดัน</h6>
                        <h1 class="@if ($data->bps > 140 OR $data->bpd > 100) {{ 'color-highlight' }} @else {{ 'color-blue2-dark' }} @endif mb-2">@if ($data->bps || "") {{ $data->bps }}/{{ $data->bpd }} @endif</h1>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="mx-0 mb-0">
                        <h6 class="font-14 font-700">อุณหภูมิ(C)</h6>
                        <h1 class="@if ($data->temperature > 37.4) {{ 'color-highlight' }} @else {{ 'color-blue2-dark' }} @endif mb-2">{{ $data->temperature }}</h1>
                    </div>
                </div>
                <div class="col-4 pr-3 text-right">
                    <div class="mx-0 mb-0">
                        <h6 class="font-14 font-700">ชีพจร</h6>
                        <h1 class="@if ($data->pulse > 100) {{ 'color-highlight' }} @else {{ 'color-blue2-dark' }} @endif mb-2">{{ $data->pulse }}</h1>
                    </div>
                </div>
            </div>
            <div class="divider mt-2 mb-3"></div>
            <div class="row mb-0">
                <div class="col-4">
                    <div class="mx-0 mb-3">
                        <h6 class="font-14 font-700">น้ำหนัก(กก.)</h6>
                        <h3 class="@if ($data->bw > 100) {{ 'color-highlight' }} @else {{ 'color-blue2-dark' }} @endif font-20 mb-0">{{ $data->bw }}</h3>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="mx-0 mb-3">
                        <h6 class="font-14 font-700">ส่วนสูง(ซม.)</h6>
                        <h3 class="@if ($data->height < 120) {{ 'color-highlight' }} @else {{ 'color-blue2-dark' }} @endif font-20 mb-0">{{ $data->height }}</h3>
                    </div>
                </div>
                <div class="col-4 pr-3 text-right">
                    <div class="mx-0 mb-3">
                        <h6 class="font-14 font-700">BMI</h6>
                        <h3 class="@if ($data->bmi < 18.5 OR $data->bmi > 30) {{ 'color-highlight' }} @else {{ 'color-blue2-dark' }} @endif font-20 mb-0">{{ $data->bmi }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <h4 class="font-700 text-uppercase font-12 opacity-30 mb-3 mt-n2">วินิจฉัย</h4>
            <div class="row mb-3">
                @foreach ($visit_diag as $data)
                <div class="col-12"><p class="font-13 mb-0 font-500 color-theme text-left">
                    {{ $data->icd10 }} : {{ $data->name }} @if ($data->tname || "") ({{ $data->tname }}) @endif
                </p></div>
                <div class="divider w-100 mb-2 mt-2"></div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <h4 class="font-700 text-uppercase font-12 opacity-30 mb-3 mt-n2">ยา</h4>
            <div class="row mb-3">
                <div class="col-8"><p class="font-14 mb-0 font-800 color-theme text-left">รายการยา</p></div>
                <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-right">จำนวน</p></div>
                <div class="divider w-100 mb-2 mt-2"></div>
                @foreach ($visit_drug as $data)
                <div class="col-8"><p class="font-13 mb-0 font-500 color-theme text-left">{{ $data->name }}</p></div>
                <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-right">{{ $data->qty }} {{ $data->units }}</p></div>
                <div class="divider w-100 mb-2 mt-2"></div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content mb-0">
            <h4 class="font-700 text-uppercase font-12 opacity-30 mb-3 mt-n2">LAB/X-Ray</h4>

                <div class="list-group list-custom-small list-icon-0">
                    <a data-toggle="collapse" href="#collapse-1">
                        <i class="fa font-14 fa-tint color-red2-dark"></i>
                        <span class="font-14">ตรวจเลือด CBC</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
                <div class="col-12 collapse" id="collapse-1">
                    <div class="row mb-3">
                        <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-left">รายการ</p></div>
                        <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-center">ค่าปกติ</p></div>
                        <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-right">ผลตรวจ</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">FBS</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center">14.10</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-red2-dark text-right"><i class="fa fa-arrow-up color-red2-dark pr-1"></i> 16.40</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">HDL</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center">16.30</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-right">15.50</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">LDL</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center">18.00</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-right">14.10</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                    </div>
                </div>

                <div class="list-group list-custom-small list-icon-0">
                    <a data-toggle="collapse" href="#collapse-2">
                        <i class="fa font-14 fa-share-alt color-blue2-dark"></i>
                        <span class="font-14">ตรวจปัสสาวะ Urine</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
                <div class="col-12 collapse" id="collapse-2">
                    <div class="row mb-3">
                        <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-left">รายการ</p></div>
                        <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-center">ค่าปกติ</p></div>
                        <div class="col-4"><p class="font-14 mb-0 font-800 color-theme text-right">ผลตรวจ</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">FBS</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center">14.10</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-red2-dark text-right"><i class="fa fa-arrow-up color-red2-dark pr-1"></i> 16.40</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">HDL</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center">16.30</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-right">15.50</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">LDL</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center">18.00</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-right">14.10</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                    </div>
                </div>

                <div class="list-group list-custom-small list-icon-0">
                    <a data-toggle="collapse" href="#collapse-3">
                        <i class="fa font-14 fa-exclamation-triangle color-red2-dark"></i>
                        <span class="font-14">X-Ray</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
                <div class="col-12 collapse" id="collapse-3">
                    <div class="row mb-3">
                        <div class="col-4"><p class="font-13 mb-0 font-500 color-theme text-left">X-Ray</p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-center"></p></div>
                        <div class="col-4"><p class="font-13 mb-0 font-800 color-theme text-right">CXR Left</p></div>
                        <div class="divider w-100 mb-0 mt-0"></div>
                    </div>
                </div>

        </div>
    </div>


    {{-- <div class="card card-style">
        <div class="content mb-3">
            <h4 class="font-700 text-uppercase font-12 opacity-30 mb-3 mt-n2">ประเมินสุขภาพ</h4>
            <div class="row mb-0">
                <div class="col-6">
                    <div class="chart-container mb-4" style="height:200px;">
                        <canvas class="chart" id="wallet-chart"/>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <div class="progress mb-4" style="height:7px;">
                            <div class="progress-bar bg-highlight" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-7">
                                <h5 class="mt-n3 font-13">Expenses</h5>
                            </div>
                            <div class="col-5">
                                <h5 class="mt-n3 font-13 text-right color-red2-dark">-20%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="progress mb-4" style="height:7px;">
                            <div class="progress-bar bg-green1-dark" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-7">
                                <h5 class="mt-n3 font-13">Earnings</h5>
                            </div>
                            <div class="col-5">
                                <h5 class="mt-n3 font-13 text-right color-green1-dark">+35%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="progress mb-4" style="height:7px;">
                            <div class="progress-bar bg-blue2-dark" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-7">
                                <h5 class="mt-n3 font-13">Savings</h5>
                            </div>
                            <div class="col-5">
                                <h5 class="mt-n3 font-13 text-right color-blue2-dark">+20%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="progress mb-4" style="height:7px;">
                            <div class="progress-bar bg-yellow1-dark" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-7">
                                <h5 class="mt-n3 font-13">Goals</h5>
                            </div>
                            <div class="col-5">
                                <h5 class="mt-n3 font-13 text-right color-yellow1-dark">+60%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


</div>
<!-- End of Page Content-->
@endforeach

@endsection

@section('footer_script')

@endsection
