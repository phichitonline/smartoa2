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
                'input1' => ['required', 'string', 'min:5'],
                'g-recaptcha-response' => 'required',

                // 'g-recaptcha-response' => function ($attribute, $value, $fail) {
                //     $secretKey = env('GOOGLE_RECAPTCHA_SECRET');
                //     $response = $value;
                //     $userIP = $_SERVER['REMOTE_ADDR'];
                //     $url = "https://www.google.com/recaptcha/api/siteverify/?secret=$secretKey&response=$response&remoteip=$userIP";
                //     $response = \file_get_contents($url);
                //     $response = json_decode($response);
                //     if (!$response->success) {
                //         Session()->flash('g-recaptcha-response', 'คลิกเลือกเพื่อยืนยันเป็นมนุษย์ก่อนนะครับ');
                //         $fail($attribute.'Google reCaptcha failed');
                //     }
                // },

            ],
            [
                'input1.required'=> 'กรุณากรอกข้อมูลด้วยครับ',
                'g-recaptcha-response.required'=> 'คลิกเลือกเพื่อยืนยันเป็นมนุษย์ก่อนนะครับ',
            ]
        );

        dd($request);
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
