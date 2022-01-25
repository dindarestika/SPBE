@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 ">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h5 class="card-title">Detail Evaluasi</h5>
                    </div>
                    <div class="right">
                        <a href="/penilaian" type="button" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="card-body d-flex pb-0">
                    <table id="datatable" class="table table-striped">
                        <tbody>
                            <tr>
                                <td width="100">Tahun</td>
                                <td>{{ $evaluasi->tahun_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $evaluasi->nama_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>{{ $evaluasi->deskripsi_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="/lihat-penilaian/{{ $evaluasi->id }}/soalpertanyaanumum" type="button"
                                        class="btn btn-primary btn-sm tombol_umum_{{ $evaluasi->status === 'insert' ? 'insert' : 'update' }}">Pertanyaan
                                        Umum</a>
                                    <a href="/lihat-penilaian/{{ $evaluasi->id }}/mandiri" type="button"
                                        class="btn btn-primary btn-sm">Penilaian Mandiri</a>
                                    <a href="/lihat-penilaian/{{ $evaluasi->id }}/skorindex" type="button"
                                        class="btn btn-primary btn-sm">Skor Index</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
