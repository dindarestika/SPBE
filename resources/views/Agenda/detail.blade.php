@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="bd-example">
                    <div class="alert alert-primary mb-0" role="alert">
                        <h4 class="alert-heading">Detail Agenda</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th width="120px">ID Agenda</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->id }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Jenis Agenda</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->jenisagenda->nama_jenis }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Nama</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->nama_acara }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Perihal</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->perihal }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Tanggal</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->tanggal_acara }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Waktu</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->waktu_acara }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Tempat</th>
                            <th width="20px">:</th>
                            <th>{{ $agenda->tempat_acara }}</th>
                        </tr>
                        <tr>
                            <th width="120px">Link Upload</th>
                            <th width="20px">:</th>
                            <th><a href="{{ $agenda->link_upload }}">{{ $agenda->link_upload }}</a></th>
                        </tr>
                        <tr>
                            <th width="120px">Surat</th>
                            <th></th>
                            <th></th>
                        </tr>

                    </table>
                    <div class="mb-3">
                        <object data="{{ asset('storage/' . $agenda->surat) }}" alt="Surat" width="900" height="800"></object>
                    </div>
                    <div class="modal-footer">
                        <a href="/agenda" class="btn btn-primary ">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
