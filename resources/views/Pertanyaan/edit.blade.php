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
                  <h4 class="card-title">Edit Data Pertanyaan</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/pertanyaan/{{$pertanyaan->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label class="form-label">Indikator</label>
                        <select name="indikator_id" class="form-select" required aria-label=".form-select-sm example">
                            <?php
                                foreach ($indikator as $indikator)
                                {
                                    echo "<option value='$indikator->id'";
                                    echo $pertanyaan['indikator_id']==$indikator->id?'selected':'';
                                    echo ">$indikator->nama_indikator</option>";
                                }
                            ?>
                        </select>
                        <label class="form-label">Tingkat</label>
                        <input type="text" name="tingkat" value="{{$pertanyaan->tingkat}}" class="form-control @error('tingkat') is-invalid @enderror" required value="{{ old('tingkat')}}">
                        @error('tingkat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        
                        <label class="form-label">Kriteria</label>
                        <textarea name="kriteria" class="form-control @error('kriteria') is-invalid @enderror" required value="{{ old('kriteria')}}" rows="5">{{$pertanyaan->kriteria}}</textarea>
                        @error('kriteria')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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

