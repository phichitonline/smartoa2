@extends('layouts.theme')
@section('menu-active-setting','')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

    @if (Session::has('setting-updated'))
    <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl bg-green1-dark" role="alert">
        <span><i class="fa fa-check"></i></span>
        <strong>{{ Session('setting-updated') }}</strong>
        <button type="button" class="close color-white opacity-60 font-16" data-dismiss="alert" aria-label="Close">&times;</button>
    </div>

    {{-- <div id="toast-3" class="toast toast-tiny toast-top bg-green1-dark" data-delay="3000" data-autohide="true"><i class="fa fa-check mr-3"></i>บันทึกสำเร็จ</div> --}}
    @endif

    <div class="card card-style">
        <div class="content pb-0">
            <h4 class="font-400">Roboto</h4>
            <p>Our page uses Roboto Family as the main font.</p>

            <h4 class="font-20 font-500" style="font-family:'Poppins'">Poppins</h4>
            <p style="font-family:'Poppins'">This is the Poppins Sans family font.</p>

            <h4 style="font-family:'Open Sans'">Open Sans</h4>
            <p style="font-family:'Open Sans'">This is the Open Sans  family font.</p>

            <h4 style="font-family:'Lato'">Lato</h4>
            <p style="font-family:'Lato'">This is the Google Lato family font.</p>

            <h4 class="font-600" style="font-family:'Source Sans Pro'">Source Sans Pro</h4>
            <p style="font-family:'Source Sans Pro'">This is the Source Sans Pro family font.</p>

            <h4 class="font-20" style="font-family:'Satisfy'">Satisfy</h4>
            <p class="font-15 mb-1" style="font-family:'Satisfy'">This is the Source Sans Pro family font.</p>
        </div>
    </div> 

@foreach ($setting as $data)
<form method="POST" action="{{ route('setting.update', $data->id) }}">
    @csrf
    @method('put')
<div class="card card-style shadow-xl rounded-m">
    <div class="cal-footer">
        <h4 class="cal-title text-center text-uppercase font-25 bg-red2-dark color-white">{{ $moduletitle }}</h4>
        <span class="cal-message mt-3 mb-3">
            <strong class="color-gray-dark">ตั้งค่าพื้นฐานของหน่วยงานและการแสดงผลต่างๆ</strong>
            <strong class="color-gray-dark">Setting and display.</strong>
        </span>
        <div class="divider mb-0"></div>
        <div class="content mb-0">
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">ชื่อโรงพยาบาล</span>
                <input class="form-control" type="text" name="hos_name" value="{{ $data->hos_name }}">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">เบอร์โทรศัพท์</span>
                <em>(required)</em>
                <input class="form-control" type="tel" name="tel" value="{{ $data->hos_tel }}">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">เว็บไซต์</span>
                <em>(required)</em>
                <input class="form-control" type="url" name="hos_url" value="{{ $data->hos_url }}">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">Facebook</span>
                <em>(required)</em>
                <input class="form-control" type="url" name="hos_facebook" value="{{ $data->hos_facebook }}">
            </div>
            <div class="input-style input-style-2 input-required">
                <span class="color-highlight input-style-1-active">Youtube</span>
                <em>(required)</em>
                <input class="form-control" type="url" name="hos_youtube" value="{{ $data->hos_youtube }}">
            </div>
        </div>

        <div class="cal-schedule">
            <em>
                <div class="fac fac-radio fac-green"><span></span>
                    <input id="box1-fac-radio" type="radio" name="slide_status" value="Y" @if ($data->slide_status == "Y") checked @endif>
                    <label for="box1-fac-radio">แสดง</label>
                </div>
                <div class="fac fac-radio fac-red"><span></span>
                    <input id="box2-fac-radio" type="radio" name="slide_status" value="N" @if ($data->slide_status == "N") checked @endif>
                    <label for="box2-fac-radio">ไม่แสดง</label>
                </div>
            </em>
            <strong>สไลด์โฆษณา</strong>
            <div class="content mb-0">
                <div class="input-style input-style-2 input-required mt-4">
                    <span class="color-highlight input-style-1-active">หัวข้อ 1</span>
                    <input class="form-control" type="text" name="slide_1_text" value="{{ $data->slide_1_text }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ข้อความ 1</span>
                    <input class="form-control" type="text" name="slide_1_more" value="{{ $data->slide_1_more }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ชื่อภาพ 1 (ต้องอยู่ใน images/pictures/ ขนาด 300x200px)</span>
                    <input class="form-control" type="text" name="slide_1_picture" value="{{ $data->slide_1_picture }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">หัวข้อ 2</span>
                    <input class="form-control" type="text" name="slide_2_text" value="{{ $data->slide_2_text }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ข้อความ 2</span>
                    <input class="form-control" type="text" name="slide_2_more" value="{{ $data->slide_2_more }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ชื่อภาพ 2 (ต้องอยู่ใน images/pictures/ ขนาด 300x200px)</span>
                    <input class="form-control" type="text" name="slide_2_picture" value="{{ $data->slide_2_picture }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">หัวข้อ 3</span>
                    <input class="form-control" type="text" name="slide_3_text" value="{{ $data->slide_3_text }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ข้อความ 3</span>
                    <input class="form-control" type="text" name="slide_3_more" value="{{ $data->slide_3_more }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ชื่อภาพ 3 (ต้องอยู่ใน images/pictures/ ขนาด 300x200px)</span>
                    <input class="form-control" type="text" name="slide_3_picture" value="{{ $data->slide_3_picture }}">
                </div>
            </div>

        </div>

        <div class="cal-schedule">
            <em>
                <div class="fac fac-radio fac-green"><span></span>
                    <input id="box3-fac-radio" type="radio" name="pr_status" value="Y" @if ($data->pr_status == "Y") checked @endif>
                    <label for="box3-fac-radio">แสดง</label>
                </div>
                <div class="fac fac-radio fac-red"><span></span>
                    <input id="box4-fac-radio" type="radio" name="pr_status" value="N" @if ($data->pr_status == "N") checked @endif>
                    <label for="box4-fac-radio">ไม่แสดง</label>
                </div>
            </em>
            <strong>ประชาสัมพันธ์</strong>
            <div class="content mb-0">
                <div class="input-style input-style-2 input-required mt-4">
                    <span class="color-highlight input-style-1-active">ข้อความ 1</span>
                    <input class="form-control" type="text" name="pr_1" value="{{ $data->pr_1 }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ข้อความ 2</span>
                    <input class="form-control" type="text" name="pr_2" value="{{ $data->pr_2 }}">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">ข้อความ 3</span>
                    <input class="form-control" type="text" name="pr_3" value="{{ $data->pr_3 }}">
                </div>
            </div>
        </div>

        <div class="cal-schedule">
            <em>
                <div class="fac fac-radio fac-green"><span></span>
                    <input id="box5-fac-radio" type="radio" name="dm_status" value="Y" @if ($data->dm_status == "Y") checked @endif>
                    <label for="box5-fac-radio">แสดง</label>
                </div>
                <div class="fac fac-radio fac-red"><span></span>
                    <input id="box6-fac-radio" type="radio" name="dm_status" value="N" @if ($data->dm_status == "N") checked @endif>
                    <label for="box6-fac-radio">ไม่แสดง</label>
                </div>
            </em>
            <strong>ปุ่มเลือก Dark Mode โหมดกลางคืน</strong>

        </div>

        <button type="submit" class="btn btn-m btn-center-l text-uppercase font-900 bg-red2-dark rounded-sm shadow-xl mt-4 mb-0">บันทึก</button>
        <div class="clear"><br></div>

    </div>
</div>
@endforeach
</form>



</div>
<!-- End of Page Content-->

@endsection


@section('footer_script')


@endsection
