@extends('layouts.app')

@section('content')
        <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading ">

                    <h2>Gaji Karyawan</h2>
                <center>
                </div>
                <div class="panel-body">
                <center>
                        <p><img width="200px" height="200px" src="<?php echo url('asset/image/') ?>/<?php echo $pegawai->foto; ?>" class="img-circle" alt="Cinque Terre" ></p></center>
                    <center>
                    <h3>{{$pegawai->User->name}}-{{$pegawai->nip}}</h4>
                    <h4>{{$pegawai->User->email}}</h4>
                    
                    <h3>
                        @if($penggajian->status_pengambilan == "0"||$penggajian->tanggal_pengambilan="")
                            <b>Gaji Anda Belum Di Ambil Silahkan Hubungi Pihak Administrasi Jika Ada Kesalahan</b>
                        @else
                            <b>Gaji Sudah Diambil Silahkan Hubungi Pihak Administrasi Jika Ada Kesalahan</b>
                        @endif
                    </h3>
                    <h5>Gaji Lembur Sebesar Rp.{{$penggajian->jumlah_uang_lembur}} ,Gaji Pokok Sebesar Rp.{{$penggajian->gaji_pokok}} ,Mendapat Tunjangan Sebesar Rp.{{$penggajian->tunjangan_pegawai->tunjangan->besaran_uang}} ,Jadi Total Gaji Rp.{{$penggajian->gaji_total}}</h5>

                </div>
            </div>
        </div>



@endsection
