<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsermanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $patient = DB::table('hos.patient')
        //     ->select('hn', DB::raw('pname,fname,lname,sex,TIMESTAMPDIFF(YEAR,birthday,CURDATE()) AS age_y'))
        //     ->get();

        $patientusers = DB::table('patientusers')
            ->leftJoin('hos.patient', 'patientusers.hn', '=', 'patient.hn')
            ->leftJoin('hos.patient_image', 'patientusers.hn', '=', 'patient_image.hn')
            // ->select('patientusers.*', 'patient.pname,patient.fname,patient.lname,patient.sex,TIMESTAMPDIFF(YEAR,patient.birthday,CURDATE()) AS age_y,patient_image.image')
            ->paginate(25);

        // $get_userregister = DB::connection('mysql')->select('
        // SELECT u.*,p.pname,p.fname,p.lname,i.image,p.sex,TIMESTAMPDIFF(YEAR,p.birthday,CURDATE()) AS age_y
        // FROM patientusers u
        // LEFT OUTER JOIN hos.patient p ON u.hn = p.hn
        // LEFT OUTER JOIN hos.patient_image i ON u.hn = i.hn
        // ');

        return view('user.index', [
            'setting' => Setting::all(),
            // 'userregister' => $get_userregister,
            'patientusers' => $patientusers,
            'moduletitle' => "User manager",
            // 'patientusers' => DB::table('patientusers')->paginate(25),
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
