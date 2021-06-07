<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class RecaptchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recaptcha');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'cid' => ['required', 'string', 'min:13'],
                'birthday' => ['required', 'string', 'min:8'],
                'g-recaptcha-response' => function ($attribute, $value, $fail) {
                    $secretKey = env('GOOGLE_RECAPTCHA_SECRET');
                    $response = $value;
                    $userIP = $_SERVER['REMOTE_ADDR'];
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIP";
                    $response = \file_get_contents($url);
                    $response = json_decode($response);
                    if (!$response->success) {
                        Session()->flash('g-recaptcha-response', '***โปรดคลิกเพื่อยืนยันตัวตน***');
                        $fail($attribute.'Google reCaptcha failed');
                    }
                },

            ],
            [
                'cid.required'=> 'กรุณากรอกเลข 13 หลัก',
                'birthday.required'=> 'กรุณากรอกวันเดือนปีเกิด ตามตัวอย่างนี้ 31122530',
                'g-recaptcha-response.required'=> '***โปรดคลิกเพื่อยืนยันตัวตน***',
            ]
        );

        if (valid_citizen_id($request->cid) == 1) {
            $cid_chk = 'เลขบัตรประชาชน '.$request->cid.' ถูกต้อง';
            $cid_chk_c = 'success';
        } else {
            $cid_chk = 'เลขบัตรประชาชน '.$request->cid.' ไม่ถูกต้อง กรุณาตรวจสอบ';
            $cid_chk_c = 'danger';
        }

        return redirect()->route('recaptcha.index')->with(
            Session()->flash('session-alert', 'ผลการตรวจสอบถูกต้อง'),
            Session()->flash('session-alert-cid', 'CID: '.$request->cid),
            Session()->flash('session-alert-cid-chk', $cid_chk),
            Session()->flash('session-alert-cid-chk-c', $cid_chk_c),
            Session()->flash('session-alert-birthday', 'วันเกิด: '.$request->birthday),
        );

        // return view('recaptcha-ok', [
        //     'moduletitle' => "ตรวจสอบข้อมูล OK",
        //     'cid' => $request->cid,
        //     'birthday' => $request->birthday,
        // ]);
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
