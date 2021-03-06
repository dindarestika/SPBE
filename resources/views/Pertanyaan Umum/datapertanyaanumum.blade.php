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
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/evaluasi/pertanyaanumum">Evaluasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pertanyaan Umum</a>
                    </li>
                </ul>
                <div class="right">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Tambah Pertanyaan Umum</button>
                </div>
            </div>
            <div class="alert alert-primary alert-solid rounded-0 alert-dismissible fade show " role="alert">
                <span> {{ session('nama_evaluasi') }} </span>
            </div>
            </br>
            <div class="row">
                @foreach ($data_pertanyaan as $pertanyaan)
                    <div class="col-lg-6 col-md-6">
                        <div class="card bg-soft-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6>{{ $pertanyaan->soal }}</h6>
                                </div>
                            </div>
                            <div class="flex align-items-center list-indikator-action">
                                <a class="btn btn-sm btn-icon btn-warning" type="button" data-bs-toggle="modal"
                                    data-bs-target="#ModalEdit{{ $pertanyaan->id }}">
                                    <span class="btn-inner">
                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                            <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                    title="" data-original-title="Delete"
                                    href="/pertanyaanumum/{{ $pertanyaan->id }}/delete"
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                    <span class="btn-inner">
                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            stroke="currentColor">
                                            <path
                                                d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/pertanyaanumum/create" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <input type="hidden" name="evaluasi_id" class="form-control" value="{{ $evaluasi->id }}">

                            <label class="form-label">Evaluasi</label>
                            <select disabled class="form-control" required aria-label=".form-select-sm example">
                                <option value="{{ $evaluasi->id }}">{{ $evaluasi->nama_evaluasi }}</option>
                            </select>

                            <label class="form-label">OPD</label>
                            <select name="opd_id" class="form-select" required aria-label=".form-select-sm example">
                                @foreach ($data_opd as $opd)
                                    <option value="{{ $opd->id }}">{{ $opd->nama_opd }}</option>
                                @endforeach
                            </select>

                            <label class="form-label">Soal</label>
                            <textarea name="soal" class="form-control @error('soal') is-invalid @enderror"
                                rows="5"></textarea>
                            @error('soal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($data_pertanyaan as $pertanyaan)
        <div class="modal fade" id="ModalEdit{{ $pertanyaan->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/pertanyaanumum/{{ $pertanyaan->id }}/update" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="mb-3">
                                <input type="hidden" name="evaluasi_id" class="form-control"
                                    value="{{ $evaluasi->id }}">

                                <label class="form-label">Evaluasi</label>
                                <select disabled class="form-control" required aria-label=".form-select-sm example">
                                    <option>{{ $evaluasi->nama_evaluasi }}</option>
                                </select>

                                <label class="form-label">OPD</label>
                                <select name="opd_id" class="form-select" required aria-label=".form-select-sm example">
                                    <?php
                                    foreach ($data_opd as $opd) {
                                        echo "<option value='$opd->id'";
                                        echo $pertanyaan['opd_id'] == $opd->id ? 'selected' : '';
                                        echo ">$opd->nama_opd</option>";
                                    }
                                    ?>
                                </select>

                                <label class="form-label">Soal</label>
                                <textarea name="soal" class="form-control @error('soal') is-invalid @enderror"
                                    rows="5">{{ $pertanyaan->soal }}</textarea>
                                @error('soal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@stop
