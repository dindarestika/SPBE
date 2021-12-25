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
                  <h4 class="card-title">Edit Data Domain</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/domain/{{$domain->id}}/update" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="mb-3">
                                        <label class="form-label">Evaluasi</label>
                                        <select name="evaluasi_id" class="form-select" required aria-label=".form-select-sm example">
                                            <?php
                                                foreach ($data_evaluasi as $evaluasi)
                                                {
                                                    echo "<option value='$evaluasi->id'";
                                                    echo $domain['evaluasi_id']==$evaluasi->id?'selected':'';
                                                    echo ">$evaluasi->nama_evaluasi</option>";
                                                }
                                            ?>
                                        </select>

                                        <label class="form-label">Nama domain</label>
                                        <input type="text" name="nama_domain" value="{{$domain->nama_domain}}" class="form-control @error('nama_domain') is-invalid @enderror" required value="{{ old('nama_domain')}}">
                                        @error('nama_domain')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Bobot domain</label>
                                        <input type="number" name="bobot_domain" value="{{$domain->bobot_domain}}" class="form-control @error('bobot_domain') is-invalid @enderror" required value="{{ old('bobot_domain')}}">
                                        @error('bobot_domain')
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

