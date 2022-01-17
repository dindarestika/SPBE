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
                        <h4 class="card-title">Edit Data Masterplan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/datamasterplan/{{ $masterplan->id }}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Nama Masterplan</label>
                                <input type="text" name="nama_masterplan"
                                    class="form-control @error('nama_masterplan') is-invalid @enderror" required
                                    value="{{ $masterplan->nama_masterplan }}">
                                @error('nama_masterplan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Link Masterplan</label>
                                <input type="text" name="link_masterplan"
                                    class="form-control @error('link_masterplan') is-invalid @enderror" required
                                    value="{{ $masterplan->link_masterplan }}">
                                @error('link_masterplan')
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
