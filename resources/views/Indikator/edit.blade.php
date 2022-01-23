@extends('layouts.master')
@section('content')
@if(session('sukses'))
    <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
        <span>{{session('sukses')}}</span>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Edit Data Indikator</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/indikator/{{$indikator->id}}/update" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="mb-3">
                                        <label class="form-label">OPD</label>
                                        <select name="opd_id" class="form-select" required aria-label=".form-select-sm example">
                                            <?php
                                                foreach ($opd as $opd)
                                                {
                                                    echo "<option value='$opd->id'";
                                                    echo $indikator['opd_id']==$opd->id?'selected':'';
                                                    echo ">$opd->nama_opd</option>";
                                                }
                                            ?>
                                        </select>

                                        <label class="form-label">Aspek</label>
                                        <select name="aspek_id" class="form-select" required aria-label=".form-select-sm example">
                                            <?php
                                                foreach ($aspek as $aspek)
                                                {
                                                    echo "<option value='$aspek->id'";
                                                    echo $indikator['aspek_id']==$aspek->id?'selected':'';
                                                    echo ">$aspek->nama_aspek</option>";
                                                }
                                            ?>
                                        </select>

                                        <label class="form-label">Nama indikator</label>
                                        <input type="text" name="nama_indikator" value="{{$indikator->nama_indikator}}" class="form-control @error('nama_indikator') is-invalid @enderror" required value="{{ old('nama_indikator')}}">
                                        @error('nama_indikator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Bobot indikator</label>
                                        <input type="number" name="bobot_indikator" value="{{$indikator->bobot_indikator}}" class="form-control @error('bobot_indikator') is-invalid @enderror" required value="{{ old('bobot_indikator')}}">
                                        @error('bobot_indikator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Penjelasan indikator</label>
                                        <input type="text" name="penjelasan_indikator" value="{{$indikator->penjelasan_indikator}}" class="form-control @error('penjelasan_indikator') is-invalid @enderror" required value="{{ old('penjelasan_indikator')}}">
                                        @error('penjelasan_indikator')
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

