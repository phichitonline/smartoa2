<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        $hn = $_SESSION["hn"];
        // $hn = "000035634";
        $visit_list = DB::connection('mysql_hos')->select('
        SELECT v.*,s.*,p.pname,p.fname,p.lname
        FROM ovst v
        LEFT JOIN opdscreen s ON v.vn = s.vn
        LEFT JOIN patient p ON v.hn = p.hn
        WHERE v.hn = "'.$hn.'"
        ORDER BY v.vstdate DESC LIMIT 20
        ');
        foreach ($visit_list as $data) {
            $pname = $data->pname;
            $fname = $data->fname;
            $lname = $data->lname;
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

        return view('emr.index', [
            'moduletitle' => "ประวัติรับบริการ",
            'visit_list' => $visit_list,
            'pic' => $pic,
            'hn' => $hn,
            'ptname' => $pname.$fname." ".$lname,
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
        $visit_detail = DB::connection('mysql_hos')->select('
        SELECT v.*,s.*
        FROM ovst v
		LEFT JOIN opdscreen s ON v.vn = s.vn
        WHERE v.vn = "'.$id.'"
        ');

        return view('emr.emr', [
            'moduletitle' => "ประวัติรับบริการ",
            'visit_detail' => $visit_detail,
        ]);
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
