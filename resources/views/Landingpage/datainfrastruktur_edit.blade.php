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
                        <h4 class="card-title">Edit Data Infrastruktur</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/datainfrastruktur/{{ $infrastruktur->id }}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Nama Infrastruktur</label>
                                <input type="text" name="nama_infrastruktur"
                                    class="form-control @error('nama_infrastruktur') is-invalid @enderror" required
                                    value="{{ $infrastruktur->nama_infrastruktur }}">
                                @error('nama_infrastruktur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Link Infrastruktur</label>
                                <input type="text" name="link_infrastruktur"
                                    class="form-control @error('link_infrastruktur') is-invalid @enderror" required
                                    value="{{ $infrastruktur->link_infrastruktur }}">
                                @error('link_infrastruktur')
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
