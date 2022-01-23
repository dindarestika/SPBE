@extends('layouts.master')
@section('content')
@if(session('sukses'))
    <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
        <span>{{session('sukses')}}</span>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h5 class="card-title">Detail Evaluasi</h5>
                            </div>
                        </div>
                        <div class="card-body d-flex pb-0">
                            <table class="table table-striped">
                            
                                <tbody>
                                    <tr>
                                        <td width="100">Tahun</td>
                                        <td>{{$evaluasi->tahun_evaluasi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{$evaluasi->nama_evaluasi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>{{$evaluasi->deskripsi_evaluasi}}</td>
                                    </tr>
                                </tbody>
                            
                            </table>
                        </div>
                        <div class="card-body mt-0 pt-0 ab">
                            <div class="d-flex flex-wrap align-items-center justify-content-center">
                                <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab"
                                    id="profile-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a href="/lihat-penilaian/{{$evaluasi->id}}/pertanyaanumum" type="button" class="btn btn-primary btn-sm">Pertanyaan Umum</a>
                                        <a href="/lihat-penilaian/{{$evaluasi->id}}/mandiri"  type="button" class="btn btn-primary btn-sm">Penilaian Mandiri</a>
                                        <a href="/lihat-penilaian/{{$evaluasi->id}}/skorindex" type="button" class="btn btn-primary btn-sm">Skor Index</a>                                   
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop
