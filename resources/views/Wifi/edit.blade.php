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
                  <h4 class="card-title">Edit Data Wifi</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/wifi/{{$wifi->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="mb-3">
                                        <label class="form-label">Nama Wifi</label>
                                        <input type="text" name="nama_wifi" value="{{$wifi->nama_wifi}}" class="form-control @error('nama_wifi') is-invalid @enderror" required value="{{ old('nama_wifi')}}">
                                        @error('nama_wifi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Latitude</label>
                                        <input type="text" name="latitude" value="{{$wifi->latitude}}" class="form-control @error('latitude') is-invalid @enderror" required value="{{ old('latitude')}}">
                                        @error('latitude')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Longitude</label>
                                        <input type="text" name="longitude" value="{{$wifi->longitude}}" class="form-control @error('longitude') is-invalid @enderror" required value="{{ old('longitude')}}">
                                        @error('longitude')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label">Alamat Wifi</label>
                                        <textarea name="alamat_wifi" class="form-control @error('alamat_wifi') is-invalid @enderror" required value="{{ old('alamat_wifi')}}" rows="2">{{$wifi->alamat_wifi}}</textarea>
                                        @error('alamat_wifi')
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

