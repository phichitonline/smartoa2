<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hn = "000035634";
        session_start();
        // if (isset($_SESSION["hn"])) {
        if (isset($hn)) {

            $view_page = "main";
            $hn = "000035634";
            // $hn = $_SESSION["hn"];

            $check_patient = DB::connection('mysql_hos')->select('
            SELECT p.cid,p.hn,p.pname,p.fname,p.lname,p.birthday,p.bloodgrp,p.drugallergy,p.pttype,ptt.`name` AS pttypename,p.clinic,w.`status` AS q_status
            ,TIMESTAMPDIFF(YEAR,p.birthday,CURDATE()) AS age_year,o.vn,w.type,w.qnumber,w.pt_priority,w.room_code,k.department,s.name AS spcltyname,w.time,w.time_complete
            FROM patient p LEFT OUTER JOIN pttype ptt ON ptt.pttype = p.pttype
            LEFT OUTER JOIN ovst o ON o.hn = p.hn AND o.vstdate = CURDATE()
            LEFT OUTER JOIN web_queue w ON w.vn = o.vn
            LEFT OUTER JOIN kskdepartment k ON k.depcode = w.room_code
            LEFT OUTER JOIN spclty s ON s.spclty = k.spclty
            WHERE p.hn = "'.$hn.'"
            ORDER BY w.time DESC LIMIT 1
            ');
            foreach($check_patient as $data){
                $cid = $data->cid;
                $pname = $data->pname;
                $fname = $data->fname;
                $lname = $data->lname;
                $birthday = $data->birthday;
                $bloodgrp = $data->bloodgrp;
                $drugallergy = $data->drugallergy;
                $pttypename = $data->pttypename;
                $clinic = $data->clinic;
                $age_year = $data->age_year;
                $vn = $data->vn;
                $webq = $data->type.$data->qnumber;
                $webqn = $data->qnumber;
                $department = $data->department;
                $spcltyname = $data->spcltyname;
                $pt_priority = $data->pt_priority;
                $q_status = $data->q_status;
                $time = $data->time;
                $time_complete = $data->time_complete;

                if ($data->room_code == "999") {
                    $room_code = 1;
                } else {
                    $room_code = 0;
                }
            }

            $wait_qp = DB::connection('mysql_hos')->select('
            SELECT COUNT(*) AS waitq FROM web_queue
            WHERE room_code = "'.$room_code.'" AND `status` = "1" AND pt_priority <> "0"
            AND type IN ("A","S")
            ');
            foreach($wait_qp as $data){
                $waitqp = $data->waitq;
            }

            if ($room_code || null) {
                $room_code2 = $room_code;
                $webqn2 = $webqn;
            } else {
                $room_code2 = "000";
                $webqn2 = 0;
            }

            if ($pt_priority == "1") {
                $waitqp2 = 0;
                $priority = "1";
                $pri_color = "yellow";
            } else if ($pt_priority == "2") {
                $waitqp2 = 0;
                $priority = "2";
                $pri_color = "red";
            } else {
                $waitqp2 = $waitqp;
                $priority = "0";
                $pri_color = "green";
            }
            $wait_q = DB::connection('mysql_hos')->select('
            SELECT COUNT(*) AS waitq FROM web_queue
            WHERE room_code = "'.$room_code2.'" AND `status` = "1" AND pt_priority = "'.$priority.'"
            AND type IN ("A","S") AND qnumber < '.$webqn2.'
            ');
            foreach($wait_q as $data){
                $waitq = $data->waitq+$waitqp2;
            }

            $images_user = DB::connection('mysql_hos')->select('
            SELECT pm.image,TIMESTAMPDIFF(YEAR,pt.birthday,CURDATE()) AS age_y,pt.sex
            FROM patient pt LEFT OUTER JOIN patient_image pm ON pt.hn = pm.hn WHERE pt.hn = "'.$hn.'"
            ');
            foreach($images_user as $data){
                if ($data->image || NULL) {
                    $pic = "show_image.php";
                } else {
                    switch ($data->sex) {
                        case 1 : if ($data->age_y<=15) $pic="images/boy.jpg"; else $pic="images/male.jpg";break;
                        case 2 : if ($data->age_y<=15) $pic="images/girl.jpg"; else $pic="images/female.jpg";break;
                        default : $pic="images/boy.jpg";break;
                    }
                }
            }

            $check_user = DB::connection('mysql')->select('
            SELECT * FROM patientusers WHERE hn = "'.$hn.'"
            ');
            foreach($check_user as $data){
                if ($data->que_app_flag == NULL) {
                    $user_flag =  ' ';
                } else {
                    $user_flag =  'AND que_app_flag = "'.$data->que_app_flag.'" ';
                }
            }

            $oapp_wait_conf = DB::connection('mysql')->select('
            SELECT COUNT(*) AS cc FROM que_card WHERE `status` IS NULL '.$user_flag.'
            ');
            foreach($oapp_wait_conf as $data){
                $oapp_wait_confirm = $data->cc;
            }

            // $lineid = $_SESSION["lineid"];
            $lineid = "U59bdf1afa739eecc378d8fbdc2a4c02e";
            // $tel = $_SESSION["tel"];
            $tel = "0619921666";
            // $email = $_SESSION["email"];
            $email = "phichitonline@gmail.com";
            // $isadmin = $_SESSION["isadmin"];
            $isadmin = "A";
        } else {
            $view_page = "error_close_app";
            $lineid = "";
            $cid = "";
            $hn = "";
            $pname = "";
            $fname = "";
            $lname = "";
            $birthday = "";
            $tel = "";
            $email = "";
            $bloodgrp = "";
            $drugallergy = "";
            $pttypename = "";
            $clinic = "";
            $pic = "";
            $age_year = "";
            $vn = "";
            $webq = "";
            $webqn = "";
            $department = "";
            $spcltyname = "";
            $waitq = "";
            $pri_color = "";
            $isadmin = "";
            $q_status = "";
            $time = "";
            $time_complete = "";
            $room_code = 0;
            $oapp_wait_confirm = "";
        }

        $datenow = date("Y-m-d");
        $check_app_user = DB::connection('mysql_hos')->select('
        SELECT COUNT(*) AS cc,oapp_id FROM oapp WHERE hn = "'.$hn.'" AND nextdate = CURDATE()
        ');
        foreach($check_app_user as $data){
            if($data->cc == 0){
                $user_app_check = "N";
                $user_app_id = "";
            } else {
                $user_app_check = "Y";
                $user_app_id = $data->oapp_id;
            }
        }

        return view($view_page, [
            'setting' => Setting::all(),
            'moduletitle' => "Main",
            'lineid' => $lineid,
            'cid' => $cid,
            'hn' => $hn,
            'pname' => $pname,
            'fname' => $fname,
            'lname' => $lname,
            'birthday' => $birthday,
            'tel' => $tel,
            'email' => $email,
            'ptname' => $pname.$fname." ".$lname,
            'bloodgrp' => $bloodgrp,
            'drugallergy' => $drugallergy,
            'pttypename' => $pttypename,
            'clinic' => $clinic,
            'pic' => $pic,
            'age_year' => $age_year,
            'vn' => $vn,
            'webq' => $webq,
            'webqn' => $webqn,
            'department' => $department,
            'spcltyname' => $spcltyname,
            'waitq' => $waitq,
            'pri_color' => $pri_color,
            'isadmin' => $isadmin,
            'q_status' => $q_status,
            'time' => $time,
            'time_complete' => $time_complete,
            'room_code' => $room_code,
            'user_app_check' => $user_app_check,
            'user_app_id' => $user_app_id,
            'oapp_wait_confirm' => $oapp_wait_confirm,

            // 'ssalert' => session('session-alert'),
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
