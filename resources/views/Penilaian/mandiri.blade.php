@extends('layouts.master')
@section('content')
@if(session('sukses'))
    <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
        <span>{{session('sukses')}}</span>
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
                                    <a href="/lihat-penilaian/{{$evaluasi->id}}/detail" type="button" class="btn btn-primary btn-sm">Kembali</a>
                            </div>
                        </div>
                        <div class="card-body d-flex pb-0">
                            <table class="table table-striped">
                            
                                <tbody>
                                    <tr>
                                        <td width="100">Tahun</td>
                                        <td>{{$evaluasi->tahun_evaluasi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{$evaluasi->nama_evaluasi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>{{$evaluasi->deskripsi_evaluasi}}</td>
                                    </tr>
                                </tbody>
                            
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade active show">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center">
                            <div class="header-title">
                                <h4 class="card-title">Tabel Indikator</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Indikator</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach($indikator as $indikator)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$indikator->nama_indikator}}</td>
                                            <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$indikator->id}}">
                                                Indikator {{$indikator->id}}
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade pe-none !important" id="exampleModal{{$indikator->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel">Indikator {{$indikator->id}}</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                                    
                                                        <div class="modal-body">
                                                            <table class="table table-striped justify-content-start pe-none !important">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Domain</td>
                                                                        <td>{{$indikator->aspek->domain->nama_domain}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Aspek</td>
                                                                        <td>{{$indikator->aspek->nama_aspek}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Indikator</td>
                                                                        <td>{{$indikator->nama_indikator}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            
                                        
                                                            <div class="bd-example">
                                                                <div class="accordion" id="accordionExample">
                                                                    <!--
                                                                    <div class="alert alert-primary" >
                                                                        <h4 class="alert-heading"></h4>
                                                                        <p>{{$indikator->penjelasan_indikator}}</p>
                                                                    </div>
                                                                    -->            
                                                                    <form action="/jawaban" method="POST" enctype="multipart/form-data">
                                                                    {{csrf_field()}}
                                                                    <div class="bd-example table-responsive">
                                                                        <table id="datatable" class="table table-sm table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">Tingkat</th>
                                                                                    <th scope="col" >Kriteria</th>
                                                                                    <!-- <th scope="col">Capaian</th> -->
                                                                                </tr>
                                                                            </thead>
                                                                            <?php $pertanyaan = App\Models\Pertanyaan::where('indikator_id', $indikator->id)->get();?>
                                                                            @foreach($pertanyaan as $p)
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="text-align:center">{{$p->tingkat}}</td>
                                                                                    <td ><p>{{$p->kriteria}}</p>
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" name="pertanyaan_id[]" class="form-control" value="{{$p->id}}">
                                                                                        <input type="hidden" name="user_id[]" class="form-control" value="{{auth()->user()->id}}">
                                                                                        <textarea name="jawaban[]" class="form-control" id="Textarea" placeholder="Jawab di sini ..." rows="3"></textarea>
                                                                                    </div>
                                                                                    <!--
                                                                                    <div class="form-group mb-0">
                                                                                        <label class="form-label">Upload Bukti</label>
                                                                                        <input type="file" name="bukti_dukung[]" class="form-control" value="{{$p->bukti_dukung}}">
                                                                                    </div>
                                                                                    
                                                                                    </td>
                                                                                    
                                                                                    <td style="text-align:center">
                                                                                            <input type="radio" class="form-check-input" name="capaian[]" value="{{$p->tingkat}}">
                                                                                    -->
                                                                                    </td>
                                                                                    
                                                                                </tr>
                                                                            </tbody>
                                                                            @endforeach
                                                                        </table>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-warning">Simpan</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop
