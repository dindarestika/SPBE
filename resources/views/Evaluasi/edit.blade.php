@extends('layouts.master')
@section('content')
    @if (session('sukses'))
        <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
            <span>{{ session('sukses') }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Edit Data Evaluasi</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/evaluasi/{{ $evaluasi->id }}/update" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Tahun Evaluasi</label>
                                <input type="text" name="tahun_evaluasi" value="{{ $evaluasi->tahun_evaluasi }}"
                                    class="form-control @error('tahun_evaluasi') is-invalid @enderror" required
                                    value="{{ old('tahun_evaluasi') }}">
                                @error('tahun_evaluasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Nama Evaluasi</label>
                                <input type="text" name="nama_evaluasi" value="{{ $evaluasi->nama_evaluasi }}"
                                    class="form-control @error('nama_evaluasi') is-invalid @enderror" required
                                    value="{{ old('nama_evaluasi') }}">
                                @error('nama_evaluasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Deskripsi Evaluasi</label>
                                <input type="text" name="deskripsi_evaluasi" value="{{ $evaluasi->deskripsi_evaluasi }}"
                                    class="form-control @error('deskripsi_evaluasi') is-invalid @enderror" required
                                    value="{{ old('deskripsi_evaluasi') }}">
                                @error('deskripsi_evaluasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
