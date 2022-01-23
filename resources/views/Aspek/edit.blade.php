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
                  <h4 class="card-title">Edit Data Aspek</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/aspek/{{$aspek->id}}/update" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="mb-3">
                                        <label class="form-label">Domain</label>
                                        <select name="domain_id" class="form-select" required aria-label=".form-select-sm example">
                                            <?php
                                                foreach ($data_domain as $domain)
                                                {
                                                    echo "<option value='$domain->id'";
                                                    echo $aspek['domain_id']==$domain->id?'selected':'';
                                                    echo ">$domain->nama_domain</option>";
                                                }
                                            ?>
                                        </select>

                                        <label class="form-label">Nama aspek</label>
                                        <input type="text" name="nama_aspek" value="{{$aspek->nama_aspek}}" class="form-control @error('nama_aspek') is-invalid @enderror" required value="{{ old('nama_aspek')}}">
                                        @error('nama_aspek')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Bobot aspek</label>
                                        <input type="number" name="bobot_aspek" value="{{$aspek->bobot_aspek}}" class="form-control @error('bobot_aspek') is-invalid @enderror" required value="{{ old('bobot_aspek')}}">
                                        @error('bobot_aspek')
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

