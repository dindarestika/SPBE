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
                        <h4 class="card-title">EDIT DATA DOKUMENTASI</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/dokumentasi/{{ $dokumentasi->id }}/update" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Nama Acara</label>
                                <select name="agenda_id" class="form-select" required
                                    aria-label=".form-select-sm example">

                                    <?php
                                    foreach ($agenda as $agenda) {
                                        echo "<option value='$agenda->id'";
                                        echo $dokumentasi['agenda_id'] == $agenda->id ? 'selected' : '';
                                        echo ">$agenda->nama_acara</option>";
                                    }
                                    ?>
                                </select>
                                &nbsp;<br />
                                <label class="form-label">Upload Notulen</label>
                                <object data="{{ asset('storage/' . $dokumentasi->notulen) }}" alt="Notulen" width="900"
                                    height="800"></object>
                                <input type="file" name="notulen" value="{{ $dokumentasi->notulen }}"
                                    class="form-control">
                                @error('notulen')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                &nbsp;<br />
                                <label class="form-label">Upload Surat</label>
                                <object data="{{ asset('storage/' . $dokumentasi->surat) }}" alt="Surat" width="900"
                                    height="800"></object>
                                <input type="file" name="surat" value="{{ $dokumentasi->surat }}" class="form-control">
                                @error('surat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                &nbsp;<br />
                                <label class="form-label">Upload Presensi</label>
                                <object data="{{ asset('storage/' . $dokumentasi->presensi) }}" alt="Presensi" width="900"
                                    height="800"></object>
                                <input type="file" name="presensi" value="{{ $dokumentasi->presensi }}"
                                    class="form-control">
                                @error('presensi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                &nbsp;<br />
                                <label for="image" class="form-label">Upload Foto </label> </br>
                                <img src="{{ asset('storage/' . $dokumentasi->foto_acara) }}" width="900" height="900">
                                <input type="file" name="foto_acara" value="{{ $dokumentasi->foto_acara }}"
                                    class="form-control">

                                <label>Tautan</label>
                                <input name="tautan" value="{{ $dokumentasi->tautan }}"
                                    class="form-control @error('tautan') is-invalid @enderror">
                                <div class="text-danger">
                                    @error('tautan')
                                        {{ $message }}
                                    @enderror
                                </div>
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
