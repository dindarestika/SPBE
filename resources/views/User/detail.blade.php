@extends('layouts.master')
@section('content')
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
         <div class="bd-example">
            <div class="alert alert-primary mb-0" role="alert">
                <h4 class="alert-heading">Detail User</h4>
            </div>
         </div>
            <div class="card-body">
               <table class="table">
                   <tr>
                        <th width="120px">ID User</th>
                        <th width="20px">:</th>
                        <th>{{ $user->id}}</th>
                    </tr>
                     <tr>
                        <th width="120px">Role</th>
                        <th width="20px">:</th>
                        <th>{{ $user->role->nama_role }}</th>
                    </tr>
                    <tr>
                        <th width="120px">OPD</th>
                        <th width="20px">:</th>
                        <th>{{ $user->opd->nama_opd}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Nama</th>
                        <th width="20px">:</th>
                        <th>{{ $user->nama_user}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Email</th>
                        <th width="20px">:</th>
                        <th>{{ $user->email_user}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Username</th>
                        <th width="20px">:</th>
                        <th>{{ $user->username}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Alamat</th>
                        <th width="20px">:</th>
                        <th>{{ $user->alamat_user}}</th>
                    </tr>
                    <tr>
                        <th width="120px">Foto</th>
                        <th width="20px">:</th>
                        <th>
                            <img src="{{asset('storage/' . $user->foto_user)}}" alt="User-Profile" class="img-fluid avatar avatar-100 avatar-rounded">
                        </th>
                    </tr>
                </table>    
                <div class="modal-footer">
                    <a href="/user" class="btn btn-primary ">Kembali</a>
                </div>
            </div>
         </div>
      </div>
   </div>
@endsection