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
                                <h4 class="card-title">Data User</h4>
                                </div>
                                <div class="right">
                                    <button type="button" class="btn btn-primary btn-sm" 
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                                        <thead>
                                            <tr class="ligth">
                                                <th>Role</th>
                                                <th>Nama User</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th style="min-width: 100px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data_user as $user)
                                            <tr>
                                                <td>{{$user->role->nama_role}}</td>
                                                <td>{{$user->nama_user}}</td>
                                                <td>{{$user->email_user}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                                            data-placement="top" title="" data-original-title="Detail"
                                                            href="/user/{{$user->id}}/detail">
                                                            <span class="btn-inner">
                                                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                        d="M12 2.75C17.108 2.75 21.25 6.891 21.25 12C21.25 17.108 17.108 21.25 12 21.25C6.891 21.25 2.75 17.108 2.75 12C2.75 6.892 6.892 2.75 12 2.75Z" 
                                                                        stroke="currentColor" stroke-width="1.5" 
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M15.9393 12.0129H15.9483" 
                                                                        stroke="currentColor" stroke-width="2" 
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M11.9301 12.0129H11.9391" 
                                                                        stroke="currentColor" stroke-width="2" 
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M7.92128 12.0129H7.93028" 
                                                                        stroke="currentColor" stroke-width="2" 
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                            data-placement="top" title="" data-original-title="Edit"
                                                            href="/user/{{$user->id}}/edit">
                                                            <span class="btn-inner">
                                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip"
                                                            data-placement="top" title="" data-original-title="Delete"
                                                            href="/user/{{$user->id}}/delete" onclick="return confirm('Yakin ingin menghapus?')">
                                                            <span class="btn-inner">
                                                                <svg width="20" viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    stroke="currentColor">
                                                                    <path
                                                                        d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="/user/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select name="role_id" class="form-select" required aria-label=".form-select-sm example">
                            <!-- <option selected="">Pilih...</option> -->
                            @foreach($data_role as $role)
                            <option value="{{$role->id}}">{{$role->nama_role}}</option>
                            @endforeach
                        </select>
                        
                        <label class="form-label">Asal OPD</label>
                        <select name="opd_id" class="form-select" required aria-label=".form-select-sm example">
                            <!-- <option selected="">Pilih...</option> -->
                            @foreach($data_opd as $opd)
                            <option value="{{$opd->id}}">{{$opd->nama_opd}}</option>
                            @endforeach
                        </select>
                        
                        <label class="form-label">Nama User</label>
                        <input type="text" name="nama_user" class="form-control @error('nama_user') is-invalid @enderror" required value="{{ old('nama_user')}}">
                        @error('nama_user')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email_user" class="form-control @error('email_user') is-invalid @enderror" required value="{{ old('email_user')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('email_user')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" required value="{{ old('username')}}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" required value="{{ old('password')}}" id="password" aria-describedby="password" placeholder=" ">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label class="form-label">Alamat User</label>
                        <textarea name="alamat_user" class="form-control @error('alamat_user') is-invalid @enderror" required value="{{ old('alamat_user')}}" rows="2"></textarea>
                        @error('alamat_user')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <label for="image" class="form-label">Upload Foto Profil</label>
                        <input type="file" id="image" name="foto_user" class="form-control @error('foto_user') is-invalid @enderror" required>
                        @error('foto_user')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

