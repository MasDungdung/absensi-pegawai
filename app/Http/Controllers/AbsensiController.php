<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datetime;
use DateTimeZone;
use App\Models\AbsensiPegawai;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('absensi.absensi-masuk');
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
        $timezone   = 'Asia/Jakarta';
        $date       = new DateTime('now', new DateTimeZone($timezone));
        $tanggal    = $date->format('Y-m-d');
        $localtime  = $date->format('H:i:s');

        $tmp_absensi   = AbsensiPegawai::where([
            ['user_id','=',auth()->user()->id],
            ['tanggal','=',$tanggal],
        ])->first(); 
        if ($tmp_absensi) {
            dd('Sudah Absen');
        }else{
            AbsensiPegawai::create([
                'user_id'   => auth()->user()->id,
                'tanggal'   => $tanggal,
                'jam_masuk' => $localtime,
            ]);
        }
        return redirect('absensi-masuk');
    }

    /**
     * Show the form for editing the specified resource.
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
