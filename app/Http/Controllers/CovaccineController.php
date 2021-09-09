<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CovaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('covaccine.cocheck', [
            'moduletitle' => "ตรวจสอบข้อมูล",
            // 'view_menu' => "disable",
        ]);
    }

    public function cocheck(request $request)
    {
        $cid = $request->get('cid');

        $check_register = DB::connection('mysql')->select('
        SELECT COUNT(*) AS coregist,r.*,s.slot_date,s.slot_time
        FROM reg_pprompt r LEFT JOIN slot_covid_19 s ON r.cid = s.cid
        WHERE r.cid = "'.$cid.'"
        ');
        foreach($check_register as $data){
            if ($data->visit_immun || NULL) {
                $date_register = "คุณ".$data->name." ได้รับการฉีดวัคซีนแล้ว". $data->visit_immun."";
            } else {
                if ($data->coregist > 0) {
                    $date_register = "คุณ".$data->name." ได้ลงทะเบียนฉีดวัคซีนไว้กับเราแล้ว เมื่อ ".$data->reg_date." แต่ยังไม่ได้วันนัดฉีด กรุณาตรวจสอบภายหลัง";
                } else {
                    $date_register = "คุณไม่มีข้อมูลการจองหรือฉีดวัคซีนกับ รพร.ตะพานหิน กรุณาตรวจสอบ";
                }
            }
        }

        $check_opduser = DB::connection('mysql')->select('
        SELECT COUNT(*) AS userregist,r.*,s.slot_date,s.slot_time
        FROM reg_pprompt r LEFT JOIN slot_covid_19 s ON r.cid = s.cid
        WHERE r.cid = "'.$cid.'" AND s.slot_date IS NOT NULL
        ');

        foreach($check_opduser as $data){
            if ($data->userregist > 0) {
                session_start();
                ob_start();
                $_SESSION["cid"] = $data->cid;
                $_SESSION["prename"] = $data->prename;
                $_SESSION["name"] = $data->name;
                $_SESSION["age"] = $data->age;
                $_SESSION["slotdate"] = $data->slot_date;
                $_SESSION["slottime"] = $data->slot_time;
                session_write_close();
                return redirect()->route('coinfo')->with(
                    'session-alert', 'คุณมีนัดฉีดวัคซีนแล้ว'
                );
            } else {
                if (valid_citizen_id($cid) == 1) {
                    return redirect()->route('covaccine.index')->with(
                        'session-alert', ''.$date_register.''
                    );
                } else {
                    return redirect()->route('covaccine.index')->with(
                        'session-alert-cid', 'เลขบัตรประชาชน '.$cid.' ไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง'
                    );
                }
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coinfo(Request $request)
    {
        session_start();
        $cid = $_SESSION["cid"];
        $prename = $_SESSION["prename"];
        $name = $_SESSION["name"];
        $age = $_SESSION["age"];
        $slotdate = $_SESSION["slotdate"];
        $slottime = $_SESSION["slottime"];
        $stime_h = substr($slottime,0,2);
        $stime_m = substr($slottime,3,2);

        return view('covaccine.coinfo', [
            'moduletitle' => "ข้อมูลนัดของคุณ",
            'view_menu' => "disable",
            'cid' => $cid,
            'age' => $age,
            'prename' => $prename,
            'name' => $name,
            'slotdate' => $slotdate,
            'slottime' => $stime_h.".".$stime_m,
        ]);
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
        //
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
