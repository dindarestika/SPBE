@extends('layouts.master')
@section('content')
    @if (session('sukses'))
        <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
            <span>{{ session('sukses') }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Edit Data User</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/user/{{ $user->id }}/update" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select name="role_id" class="form-select" required aria-label=".form-select-sm example">
                                    <?php
                                    foreach ($data_role as $role) {
                                        echo "<option value='$role->id'";
                                        echo $user['role_id'] == $role->id ? 'selected' : '';
                                        echo ">$role->nama_role</option>";
                                    }
                                    ?>
                                </select>

                                <label class="form-label">Asal OPD</label>
                                <select name="opd_id" class="form-select" required aria-label=".form-select-sm example">
                                    <?php
                                    foreach ($data_opd as $opd) {
                                        echo "<option value='$opd->id'";
                                        echo $user['opd_id'] == $opd->id ? 'selected' : '';
                                        echo ">$opd->nama_opd</option>";
                                    }
                                    ?>
                                </select>

                                <label class="form-label">Nama User</label>
                                <input type="text" name="nama_user" value="{{ $user->nama_user }}"
                                    class="form-control @error('nama_user') is-invalid @enderror" required
                                    value="{{ old('nama_user') }}">
                                @error('nama_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email_user" value="{{ $user->email_user }}"
                                    class="form-control @error('email_user') is-invalid @enderror" required
                                    value="{{ old('email_user') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('email_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="form-label">Username</label>
                                <input type="text" name="username" value="{{ $user->username }}"
                                    class="form-control @error('username') is-invalid @enderror" required
                                    value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!--
                                            <label for="password" class="form-label">Password</label>
                                            <input name="password" type="password" value="{{ $user->password }}" class="form-control @error('password') is-invalid @enderror" required value="{{ old('password') }}" id="password" aria-describedby="password" placeholder=" ">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            -->
                                <label class="form-label">Alamat User</label>
                                <textarea name="alamat_user" class="form-control @error('alamat_user') is-invalid @enderror"
                                    required value="{{ old('alamat_user') }}"
                                    rows="2">{{ $user->alamat_user }}</textarea>
                                @error('alamat_user')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="image" class="form-label">Upload Foto Profil</label> </br>
                                <img src="{{ asset('storage/' . $user->foto_user) }}" width="100" height="100">
                                <input type="file" name="foto_user" value="{{ $user->foto_user }}" class="form-control">
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
