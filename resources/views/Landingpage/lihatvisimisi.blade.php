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
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Visi Misi</h4>
                </div>
            </div>
            </br>

            <div class="col-lg-3 col-md-6">
                <div class="card bg-soft-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-end">
                                <a href="/datavisi">Visi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-soft-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-end">
                                <a href="/datamisi">Misi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
