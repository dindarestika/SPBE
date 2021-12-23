@extends('layouts.master')
@section('content')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h4 class="card-title">Profile</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="user-profile">
                        @if(auth()->user()->foto_user)
                        <img src="{{asset('storage/' . auth()->user()->foto_user)}}" alt="User-Profile" class="img-fluid avatar avatar-100 avatar-rounded">
                        @else
                        <img src="{{asset('admin/assets/images/avatars/01.png')}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                        @endif                    
                    </div>
                    <div class="mt-3">
                        <h3 class="d-inline-block">{{auth()->user()->nama_user}}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h4 class="card-title">Tentang</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="mt-2">
                    <h6 class="mb-1">Bergabung :</h6>
                    <p>{{auth()->user()->created_at}}</p>
                </div>
                <div class="mt-2">
                    <h6 class="mb-1">Email :</h6>
                    <p>{{auth()->user()->email_user}}</p>
                </div>
                <div class="mt-2">
                    <h6 class="mb-1">Username :</h6>
                    <p>{{auth()->user()->username}}</p>
                </div>
                <div class="mt-2">
                    <h6 class="mb-1">Alamat :</h6>
                    <p>{{auth()->user()->alamat_user}}</p>
                </div>
                <div class="mt-2">
                    <h6 class="mb-1">OPD :</h6>
                    <p>{{auth()->user()->opd->nama_opd}}</p>
                </div>
                
            </div>
        </div>
    </div>
@endsection
