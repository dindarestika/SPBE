@extends('layouts.master')
@section('content')
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
         <div class="bd-example">
            <div class="alert alert-primary mb-0" role="alert">
                <h4 class="alert-heading">Detail Dokumentasi</h4>
            </div>
         </div>
            <div class="card-body">
               <table class="table">
                   <tr>
                        <th width="120px">ID Dokumentasi</th>
                        <th width="20px">:</th>
                        <th>{{ $dokumentasi->id}}</th>
                    </tr>
                     <tr>
                        <th width="120px">Nama Acara</th>
                        <th width="20px">:</th>
                        <th>{{ $dokumentasi->agenda->nama_acara }}</th>
                    </tr>
                    <tr>
                        <th width="120px">Perihal</th>
                        <th width="20px">:</th>
                        <th>{{ $dokumentasi->agenda->perihal}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Tanggal</th>
                        <th width="20px">:</th>
                        <th>{{ $dokumentasi->agenda->tanggal_acara}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Waktu</th>
                        <th width="20px">:</th>
                        <th>{{ $dokumentasi->agenda->waktu_acara}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Tempat</th>
                        <th width="20px">:</th>
                        <th>{{ $dokumentasi->agenda->tempat_acara}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Notulen</th>
                        <th width="20px">:</th>
                        <th>
                            <a href="{{ asset('storage/'.$dokumentasi->notulen) }}" class="btn btn-primary">Lihat Notulen</a>
                        </th>
                    </tr>
                    <tr>
                        <th width="120px">Surat</th>
                        <th width="20px">:</th>
                        <th>
                            <a href="{{ asset('storage/'.$dokumentasi->surat) }}" class="btn btn-primary">Lihat Surat</a>
                        </th>
                    </tr>
                    <tr>
                        <th width="120px">Presensi</th>
                        <th width="20px">:</th>
                        <th>
                            <a href="{{ asset('storage/'.$dokumentasi->presensi) }}" class="btn btn-primary">Lihat Presensi</a>
                        </th>
                    </tr>
                    <tr>
                        <th width="120px">Foto Acara</th>
                        <th width="20px">:</th>
                        <th>
                            <a href="{{ asset('storage/'.$dokumentasi->foto_acara) }}" class="btn btn-primary">Lihat Foto</a>
                        </th>
                    </tr>

                </table> 
                <div class="modal-footer">
                    <a href="/dokumentasi" class="btn btn-primary ">Kembali</a>
                </div>   
            </div>
         </div>
      </div>
   </div>
@endsection