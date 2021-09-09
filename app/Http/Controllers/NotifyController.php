<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function today()
    {
        $visit_header = DB::connection('mysql_smarthos')->select('
        SELECT u.lineid AS line_id,o.*,p.pname,p.fname,p.lname FROM oapp o
        LEFT OUTER JOIN smarthos2.patientusers u ON u.hn = o.hn
        LEFT OUTER JOIN patient p ON p.hn = o.hn
		WHERE o.hn IN ("000035634") AND o.nextdate = "2020-05-01"
        ');

        return view('notify.notify', [
            'moduletitle' => "วันนี้คุณมีนัด",
            'picture_url' => "https://restful.tphcp.go.th/appointment-tphcp2.jpg",
            'fotter_color' => "#FF3333",
            'visit_header' => $visit_header,
        ]);
    }

    public function tomorrow()
    {
        $visit_header = DB::connection('mysql_smarthos')->select('
        SELECT u.lineid AS line_id,o.*,p.pname,p.fname,p.lname FROM oapp o
        LEFT OUTER JOIN smarthos2.patientusers u ON u.hn = o.hn
        LEFT OUTER JOIN patient p ON p.hn = o.hn
		WHERE o.hn IN (SELECT hn FROM smarthos2.patientusers) AND o.nextdate = DATE_FORMAT(DATE_ADD(NOW(),INTERVAL 1 DAY),"%Y-%m-%d")
        ');

        // WHERE o.hn IN ("000035634") AND o.nextdate = "2021-07-15"
        return view('notify.notify', [
            'moduletitle' => "พรุ่งนี้คุณมีนัด",
            'picture_url' => "https://restful.tphcp.go.th/appointment-tphcp4.jpg",
            'fotter_color' => "#f39c12",
            'visit_header' => $visit_header,
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
