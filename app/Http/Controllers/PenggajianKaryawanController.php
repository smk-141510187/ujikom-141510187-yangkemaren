<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use App\pegawai ;
use auth ;
use App\penggajian ;
use App\tunjangan_pegawai ;
class PenggajianKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user=User::where('email',auth::user()->email)->first();
        $pegawai=pegawai::where('id_user',$user->id)->first();
        $tunjanganpegawai=tunjangan_pegawai::where('id_pegawai',$pegawai->id)->first();
        if (!isset($tunjanganpegawai)) {
            return view('gaji.indexbelumpunyagaji',compact('pegawai','tunjanganpegawai','penggajian'));
        }
        $penggajian=penggajian::where('id_tunjangan_pegawai',$tunjanganpegawai->id)->first();
         // dd($penggajian);
        if (!isset($tunjanganpegawai) || !isset($penggajian)) {
            return view('gaji.indexbelumpunyagaji',compact('pegawai','tunjanganpegawai','penggajian'));
        }
        return view('gaji.index',compact('pegawai','tunjanganpegawai','penggajian'));
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
        $gaji=penggajian::find($id);
        $penggajian=new penggajian ;
        $penggajian=array('status_pengambilan'=>0,'tanggal_pengambilan'=>$gaji->created_at );
        penggajian::where('id',$id)->update($penggajian);
        return redirect('penggajian');
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
