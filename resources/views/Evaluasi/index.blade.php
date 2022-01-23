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
                                <h4 class="card-title">Data Evaluasi</h4>
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
                                                <th>No. </th>
                                                <th>Tahun </th>
                                                <th>Nama </th>
                                                <th>Deskripsi</th>
                                                <th style="min-width: 100px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; ?>
                                            @foreach($data_evaluasi as $evaluasi)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$evaluasi->tahun_evaluasi}}</td>
                                                <td>{{$evaluasi->nama_evaluasi}}</td>
                                                <td>{{$evaluasi->deskripsi_evaluasi}}</td>
                                                <td>
                                                    <div class="flex align-items-center list-evaluasi-action">
                                                        <a class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                            data-placement="top" title="" data-original-title="Edit"
                                                            href="/evaluasi/{{$evaluasi->id}}/edit">
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
                                                            href="/evaluasi/{{$evaluasi->id}}/delete" onclick="return confirm('Yakin ingin menghapus?')">
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

                <div class="content">
                    <!--content inner-->
                    <div class="content__inner">
                      <div class="container overflow-hidden">
                        <!--multisteps-form-->
                        <div class="multisteps-form">
                          <!--progress bar-->
                          <div class="row">
                            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                              <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Evaluasi</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Pertanyaan Umum</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">Domain</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Aspek</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Indikator</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Pertanyaan Mandiri</button>
                              </div>
                            </div>
                          </div>
                          <!--form panels-->
                          <div class="row">
                            <div class="col-12 col-lg-8 m-auto">
                              <form class="multisteps-form__form">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                                  <h3 class="multisteps-form__title">Your User Info</h3>
                                  <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                      <div class="col-12 col-sm-6">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="First Name"/>
                                      </div>
                                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Last Name"/>
                                      </div>
                                    </div>
                                    <div class="form-row mt-4">
                                      <div class="col-12 col-sm-6">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Login"/>
                                      </div>
                                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                        <input class="multisteps-form__input form-control" type="email" placeholder="Email"/>
                                      </div>
                                    </div>
                                    <div class="form-row mt-4">
                                      <div class="col-12 col-sm-6">
                                        <input class="multisteps-form__input form-control" type="password" placeholder="Password"/>
                                      </div>
                                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                        <input class="multisteps-form__input form-control" type="password" placeholder="Repeat Password"/>
                                      </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                  </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                  <h3 class="multisteps-form__title">Your Address</h3>
                                  <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                      <div class="col">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Address 1"/>
                                      </div>
                                    </div>
                                    <div class="form-row mt-4">
                                      <div class="col">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Address 2"/>
                                      </div>
                                    </div>
                                    <div class="form-row mt-4">
                                      <div class="col-12 col-sm-6">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="City"/>
                                      </div>
                                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                        <select class="multisteps-form__select form-control">
                                          <option selected="selected">State...</option>
                                          <option>...</option>
                                        </select>
                                      </div>
                                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Zip"/>
                                      </div>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                  </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                  <h3 class="multisteps-form__title">Your Order Info</h3>
                                  <div class="multisteps-form__content">
                                    <div class="row">
                                      <div class="col-12 col-md-6 mt-4">
                                        <div class="card shadow-sm">
                                          <div class="card-body">
                                            <h5 class="card-title">Item Title</h5>
                                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 col-md-6 mt-4">
                                        <div class="card shadow-sm">
                                          <div class="card-body">
                                            <h5 class="card-title">Item Title</h5>
                                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#" title="Item Link">Item Link</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                  <h3 class="multisteps-form__title">Additional Comments</h3>
                                  <div class="multisteps-form__content">
                                    <div class="form-row mt-4">
                                      <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements"></textarea>
                                    </div>
                                    <div class="button-row d-flex mt-4">
                                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                      <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
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
                <form action="/evaluasi/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="mb-3">
                        <label class="form-label">Tahun Evaluasi</label>
                        <input type="text" name="tahun_evaluasi" class="form-control @error('tahun_evaluasi') is-invalid @enderror" required value="{{ old('tahun_evaluasi')}}">
                        @error('tahun_evaluasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label class="form-label">Nama Evaluasi</label>
                        <input type="text" name="nama_evaluasi" class="form-control @error('nama_evaluasi') is-invalid @enderror" required value="{{ old('nama_evaluasi')}}">
                        @error('nama_evaluasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        
                        <label class="form-label">Deskripsi Evaluasi</label>
                        <input type="text" name="deskripsi_evaluasi" class="form-control @error('deskripsi_evaluasi') is-invalid @enderror" required value="{{ old('deskripsi_evaluasi')}}">
                        @error('deskripsi_evaluasi')
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

