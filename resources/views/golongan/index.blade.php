@extends('layouts.app')

@section('content')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Table Golongan</div>
                    
                    <div class="panel-body tambah">
                    <div class="col-md-12 e">
                        <a href="{{url('golongan/create')}}" class="btn btn-primary form-control">Tambah Data</a>
                    </div>
                    <div class="col-md-12">
                    <center>{{$golongan->links()}}</center>
                    <table class="table table-striped table-hover table-bordered">
                        <tr>
                            <th >No</th>
                            <th>Kode Golongan</th>
                            <th>Nama Golongan</th>
                            <th>Besaran Uang</th>
                            <th colspan="3">Opsi</th>
                        </tr>

                        @php
                            $no=1 ;
                        @endphp
                        @foreach($golongan as $datagolongan)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$datagolongan->kode_golongan}}</td>
                                <td>{{$datagolongan->nama_golongan}}</td>
                                <td>{{$datagolongan->besaran_uang}}</td>
                                <td><a class="btn btn-success form-control" href="{{route('golongan.edit',$datagolongan->id)}}">Edit </a></td>
                                <td>
                                     {!!Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$datagolongan->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                        
                    </table>
                </div>

            </div>
        </div>
        
@endsection
