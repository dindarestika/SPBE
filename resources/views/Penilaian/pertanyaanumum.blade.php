@extends('layouts.master')
@section('content')
    @if (session('sukses'))
        <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
            <span>{{ session('sukses') }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12 ">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h5 class="card-title">Detail Evaluasi</h5>
                    </div>
                    <div class="right">
                        <a href="/lihat-penilaian/{{ $evaluasi->id }}/detail" type="button"
                            class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="card-body d-flex pb-0">
                    <table class="table table-striped">

                        <tbody>
                            <tr>
                                <td width="100">Tahun</td>
                                <td>{{ $evaluasi->tahun_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $evaluasi->nama_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>{{ $evaluasi->deskripsi_evaluasi }}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div id="general_qn" class="tab-pane fade active show">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <div class="header-title">
                        <h4 class="card-title">Form Pertanyaan Umum</h4>
                    </div>
                </div>
                @auth
                    @if ($status == 'ADA')
                        <div class="card-body">
                            <?php $i = 1; ?>
                            @foreach ($jawaban as $jwb)
                                <div class="pt-2">
                                    <p style="color: black;">{{ $i++ }}. {{ $jwb->soal }}</p>
                                    <hr>
                                    <form action="/update/jawabanumum" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 w-100 bd-highlight">
                                                <div class="form-group">
                                                    <input type="hidden" name="id[]" class="form-control"
                                                        value="{{ $jwb->id_jawaban }}">
                                                    <input type="hidden" name="pertanyaan_umum_id[]" class="form-control"
                                                        value="{{ $jwb->id }}">
                                                    <input type="hidden" name="user_id[]" class="form-control"
                                                        value="{{ auth()->user()->id }}">
                                                    <label for="Textarea" class="form-label">Jawaban:</label>
                                                    <textarea name="jawaban[]" class="form-control" id="Textarea"
                                                        placeholder="Jawab di sini ..."
                                                        rows="3">{{ $jwb->jawaban }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>
                            </form>
                        </div>


                    @elseif($status == 'TIDAK ADA')
                        <div class="card-body">
                            <?php $i = 1; ?>
                            @foreach ($pertanyaan_umum as $pu)
                                <div class="pt-2">
                                    <p style="color: black;">{{ $i++ }}. {{ $pu->soal }}</p>
                                    <hr>
                                    <form action="/jawabanumum" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 w-100 bd-highlight">
                                                <div class="form-group">
                                                    <input type="hidden" name="pertanyaan_umum_id[]" class="form-control"
                                                        value="{{ $pu->id }}">
                                                    <input type="hidden" name="user_id[]" class="form-control"
                                                        value="{{ auth()->user()->id }}">
                                                    <label for="Textarea" class="form-label">Jawaban:</label>
                                                    <textarea name="jawaban[]" class="form-control" id="Textarea"
                                                        placeholder="Jawab di sini ..." rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>
                            </form>
                        </div>


                    @endif
                @endauth
            </div>
        </div>
    </div>

@stop
