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
                  <h4 class="card-title">Edit Data OPD</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/opd/{{$opd->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="mb-3">
                                            <label class="form-label">Nama OPD</label>
                                            <input type="text" name="nama_opd" value="{{$opd->nama_opd}}" class="form-control">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" name="email_opd" value="{{$opd->email_opd}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <label class="form-label">No Telepon</label>
                                            <input type="text" name="telepon_opd" value="{{$opd->telepon_opd}}" class="form-control">
                                            <label class="form-label">Alamat</label>
                                            <textarea name="alamat_opd" class="form-control" rows="3">{{$opd->alamat_opd}}</textarea>
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

