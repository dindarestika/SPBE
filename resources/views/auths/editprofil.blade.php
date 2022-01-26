@extends('layouts.master')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    @if (session('sukses'))
                        <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
                            <span>{{ session('sukses') }}</span>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="header-title">
                        <h4 class="card-title">Edit Profile</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/user/{{ auth()->user()->id }}/update" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <input type="hidden" name="role_id" class="form-control"
                                value="{{ auth()->user()->role_id }}">
                            <label class="form-label">Role</label>
                            <select name="role_id" class="form-control" disabled required
                                aria-label=".form-select-sm example">
                                <?php
                                foreach ($data_role as $role) {
                                    echo "<option value='$role->id'";
                                    echo auth()->user()->role_id == $role->id ? 'selected' : '';
                                    echo ">$role->nama_role</option>";
                                }
                                ?>
                            </select>

                            <input type="hidden" name="opd_id" class="form-control"
                                value="{{ auth()->user()->opd_id }}">
                            <label class="form-label">Asal OPD</label>
                            <select name="opd_id" class="form-control" disabled required
                                aria-label=".form-select-sm example">
                                <?php
                                foreach ($data_opd as $opd) {
                                    echo "<option value='$opd->id'";
                                    echo auth()->user()->opd_id == $opd->id ? 'selected' : '';
                                    echo ">$opd->nama_opd</option>";
                                }
                                ?>
                            </select>

                            <label class="form-label">Nama User</label>
                            <input type="text" name="nama_user" value="{{ auth()->user()->nama_user }}"
                                class="form-control @error('nama_user') is-invalid @enderror" required
                                value="{{ old('nama_user') }}">
                            @error('nama_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email_user" value="{{ auth()->user()->email_user }}"
                                class="form-control @error('email_user') is-invalid @enderror" required
                                value="{{ old('email_user') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="form-label">Username</label>
                            <input type="text" name="username" value="{{ auth()->user()->username }}"
                                class="form-control @error('username') is-invalid @enderror" required
                                value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="form-label">Alamat User</label>
                            <textarea name="alamat_user" class="form-control @error('alamat_user') is-invalid @enderror"
                                required value="{{ old('alamat_user') }}"
                                rows="2">{{ auth()->user()->alamat_user }}</textarea>
                            @error('alamat_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="image" class="form-label">Upload Foto Profil</label> </br>
                            <img src="{{ asset('storage/' . auth()->user()->foto_user) }}" width="100" height="100">
                            <input type="file" name="foto_user" value="{{ auth()->user()->foto_user }}"
                                class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-primary">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="header-title">
                    <h4 class="card-title">Change Password</h4>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                        <label for="new-password" class="col-md-4 control-label">Current Password</label>

                        <div class="col-md-6">
                            <input id="current-password" type="password" class="form-control" name="current-password"
                                required>

                            @if ($errors->has('current-password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('current-password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                        <label for="new-password" class="col-md-4 control-label">New Password</label>

                        <div class="col-md-6">
                            <input id="new-password" type="password" class="form-control" name="new-password" required>

                            @if ($errors->has('new-password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('new-password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                        <div class="col-md-6">
                            <input id="new-password-confirm" type="password" class="form-control"
                                name="new-password-confirm" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-warning">Change Password</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
