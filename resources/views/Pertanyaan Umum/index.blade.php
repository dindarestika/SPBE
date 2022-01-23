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
                        <a class="nav-link active" aria-current="page" href="#">Evaluasi</a>
                    </li>
                </ul>

                <div class="right">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Tambah Evaluasi</button>
                </div>
            </div>
            </br>

            <div class="row">
                @foreach ($data_evaluasi as $evaluasi)
                    <div class="col-lg-3">
                        <div class="card-transparent mb-0 desk-info">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="text-pink mb-0"><a
                                                            href="/{{ $evaluasi->id }}/{{ $evaluasi->nama_evaluasi }}/pertanyaanumum">{{ $evaluasi->nama_evaluasi }}</a>
                                                    </h6>
                                                    <div class="dropdown">
                                                        <span class="d-flex align-items-center h5 mb-0"
                                                            id="dropdownMenuButton07" role="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none">
                                                                <g>
                                                                    <g>
                                                                        <circle cx="7" cy="12" r="1" fill="black" />
                                                                        <circle cx="12" cy="12" r="1" fill="black" />
                                                                        <circle cx="17" cy="12" r="1" fill="black" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuButton07" style="">
                                                            <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                                data-bs-target="#ModalEdit{{ $evaluasi->id }}">
                                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="me-2">
                                                                    <path d="M13.7476 20.4428H21.0002" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M11.021 6.00098L16.4732 10.1881"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item"
                                                                href="/evaluasi/{{ $evaluasi->id }}/delete"
                                                                onclick="return confirm('Yakin ingin menghapus?')">
                                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="me-2">
                                                                    <path
                                                                        d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                <form action="/evaluasi/create" method="POST" enctype="multipart/form-data">{{ csrf_field() }}
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Tahun Evaluasi</label>
                            <input type="text" name="tahun_evaluasi"
                                class="form-control @error('tahun_evaluasi') is-invalid @enderror" required
                                value="{{ old('tahun_evaluasi') }}">
                            @error('tahun_evaluasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label class="form-label">Nama Evaluasi</label>
                            <input type="text" name="nama_evaluasi"
                                class="form-control @error('nama_evaluasi') is-invalid @enderror" required
                                value="{{ old('nama_evaluasi') }}">
                            @error('nama_evaluasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label class="form-label">Deskripsi Evaluasi</label>
                            <input type="text" name="deskripsi_evaluasi"
                                class="form-control @error('deskripsi_evaluasi') is-invalid @enderror" required
                                value="{{ old('deskripsi_evaluasi') }}">
                            @error('deskripsi_evaluasi')
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

    @foreach ($data_evaluasi as $evaluasi)

        <div class="modal fade" id="ModalEdit{{ $evaluasi->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/evaluasi/{{ $evaluasi->id }}/update" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
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
