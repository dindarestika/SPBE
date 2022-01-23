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
                  <h4 class="card-title">EDIT DATA VISI</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
               <form action="/datavisi/{$visi->id}/updatevisi" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label class="form-label">Visi</label>
                        <textarea name="visi" id="" cols="30" rows="10">{{ $visi->visi }}</textarea>

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

