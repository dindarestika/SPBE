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
                  <h4 class="card-title">EDIT DATA AGENDA</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/agenda/{{$agenda->id}}/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label class="form-label">Jenis Agenda</label>
                        <select name="jenisagenda_id" class="form-select" required aria-label=".form-select-sm example">
                            
                            <?php
                                foreach ($jenisagenda as $jenisagenda)
                                {
                                    echo "<option value='$jenisagenda->id'";
                                    echo $agenda['jenisagenda_id']==$jenisagenda->id?'selected':'';
                                    echo ">$jenisagenda->nama_jenis</option>";
                                }
                            ?>
                        </select>
                        
                        <label class="form-label">Nama Acara</label>
                        <input type="text" name="nama_acara" value="{{ $agenda->nama_acara }}" class="form-control @error('nama_acara') is-invalid @enderror" required >
                        @error('nama_acara')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label>Perihal</label>
                        <input name="perihal" value="{{ $agenda->perihal }}" class="form-control @error('perihal') is-invalid @enderror">
                        <div class="text-danger">
                            @error('perihal')
                                    {{ $message }}
                            @enderror 
                        </div>

                        <label>Tanggal</label>
                        <input type="date" name="tanggal_acara" value="{{ $agenda->tanggal_acara }}" class="form-control @error('tanggal_acara') is-invalid @enderror">
                        <div class="text-danger">
                            @error('tanggal_acara')
                                    {{ $message }}
                            @enderror 
                        </div>

                        <label>Waktu</label>
                        <input type="time" name="waktu_acara" value="{{ $agenda->waktu_acara }}" class="form-control @error('waktu_acara') is-invalid @enderror">
                        <div class="text-danger">
                            @error('waktu_acara')
                                    {{ $message }}
                            @enderror 
                        </div>

                        <label>Tempat</label>
                        <input name="tempat_acara" value="{{ $agenda->tempat_acara }}" class="form-control @error('tempat_acara') is-invalid @enderror">
                        <div class="text-danger">
                            @error('tempat_acara')
                                    {{ $message }}
                            @enderror 
                        </div> 
                        
                        <label>Link Upload</label>
                        <input name="link_upload" value="{{ $agenda->link_upload }}" class="form-control @error('link_upload') is-invalid @enderror">
                        <div class="text-danger">
                            @error('link_upload')
                                    {{ $message }}
                            @enderror 
                        </div> 

                        <label class="form-label">Upload Surat</label>
                        <object data="{{asset('storage/'.$agenda->surat)}}" alt="Surat" width="900" height="800"></object>
                        <input type="file" name="surat" value="{{$agenda->surat}}" class="form-control" >

                        @error('surat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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

