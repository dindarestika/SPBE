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
                        <h4 class="card-title">Edit Data Hasil Evaluasi</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/datahasilevaluasi/{{ $hasilevaluasi->id }}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Tahun Hasil Evaluasi</label>
                                <input type="text" name="tahun_hasilevaluasi"
                                    class="form-control @error('tahun_hasilevaluasi') is-invalid @enderror" required
                                    value="{{ $hasilevaluasi->tahun_hasilevaluasi }}">
                                @error('tahun_hasilevaluasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Nama Hasil Evaluasi</label>
                                <input type="text" name="nama_hasilevaluasi"
                                    class="form-control @error('nama_hasilevaluasi') is-invalid @enderror" required
                                    value="{{ $hasilevaluasi->nama_hasilevaluasi }}">
                                @error('nama_hasilevaluasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Link Hasil Evaluasi</label>
                                <input type="text" name="link_hasilevaluasi"
                                    class="form-control @error('link_hasilevaluasi') is-invalid @enderror" required
                                    value="{{ $hasilevaluasi->link_hasilevaluasi }}">
                                @error('link_hasilevaluasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
