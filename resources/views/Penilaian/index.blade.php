@extends('layouts.master')
@section('content')
@if(session('sukses'))
    <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
        <span>{{session('sukses')}}</span>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Penilaian Mandiri</h4>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table id="datatable" class="table table-striped" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Tahun</th>
                                            <th>Nama Form</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                        @foreach($data_evaluasi as $evaluasi)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$evaluasi->tahun_evaluasi}}</td>
                                            <td>{{$evaluasi->nama_evaluasi}}</td>
                                            <td>
                                                <a  button type="button" class="btn btn-primary" href="/lihat-penilaian/{{$evaluasi->id}}/detail" >Lihat</a>
                                                    
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@stop