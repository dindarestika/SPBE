@extends('layouts.master')
@section('content')
    @if (session('sukses'))
        <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
            <span>{{ session('sukses') }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12 ">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h5 class="card-title">Detail Evaluasi</h5>
                    </div>
                    <div class="right">
                        <a href="/lihat-penilaian/{{ $evaluasi->id }}/detail" type="button"
                            class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="card-body d-flex pb-0">
                    <table class="table table-striped">

                        <tbody>
                            <tr>
                                <td width="100">Tahun</td>
                                <td>{{ $evaluasi->tahun_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $evaluasi->nama_evaluasi }}</td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td>{{ $evaluasi->deskripsi_evaluasi }}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <div class="tab-pane fade active show">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <div class="header-title">
                        <h4 class="card-title">Tabel Indikator</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-indikator" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Indikator</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($indikator as $indikator)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $indikator->nama_indikator }}
                                            <span
                                                class="btn btn-sm btn-{{ $indikator->status === 'insert' ? 'warning' : 'success' }}">{{ $indikator->status === 'insert' ? 'Belum terjawab' : 'Sudah dijawab' }}</span>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            @auth
                                                {{-- @if ($status == 'ADA') --}}
                                                {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Modal1{{$indikator->id}}">
                                            Indikator {{$indikator->id}}
                                        </button> --}}

                                                {{-- Biar engga lupa data-bs-target="#Modal2{{$indikator->id}}" --}}
                                                {{-- @elseif($status=='TIDAK ADA') --}}
                                                <button type="button"
                                                    class="btn btn-primary btn-sm tombol_indikator_{{ $indikator->status === 'insert' ? 'insert' : 'update' }}"
                                                    data-id_indikator="{{ $indikator->id_indikator }}"
                                                    data-bs-toggle="modal">
                                                    Indikator {{ $indikator->id_indikator }}
                                                </button>
                                                {{-- @endif --}}
                                            @endauth
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

    {{-- Biar engga lupa Modal2{{$indikator->id}} --}}


    {{-- Modal Tambah --}}
    <div class="modal fade pe-none !important" id="modal_tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">
                        Indikator <span id="modal_tambah_indikator_id"></span> - Tambah
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <table class="table table-striped justify-content-start pe-none !important">
                        <tbody>
                            <tr>
                                <td>Domain</td>
                                <td id="modal_tambah_nama_domain"></td>
                                {{-- <td>{{$indikator->aspek->domain->nama_domain}}</td> --}}
                            </tr>
                            <tr>
                                <td>Aspek</td>
                                <td id="modal_tambah_nama_aspek"></td>
                                {{-- <td>{{$indikator->aspek->nama_aspek}}</td> --}}
                            </tr>
                            <tr>
                                <td>Indikator</td>
                                <td id="modal_tambah_nama_indikator"></td>
                                {{-- <td>{{$indikator->nama_indikator}}</td> --}}
                            </tr>
                        </tbody>
                    </table>

                    <div class="bd-example">
                        <div class="accordion" id="accordionExample">
                            <form action="/jawaban" id="form_tambah" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="bd-example table-responsive">
                                    <table id="datatable" class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tingkat</th>
                                                <th scope="col">Kriteria</th>
                                                <th scope="col">Capaian</th>
                                            </tr>
                                        </thead>
                                        <tbody id="modal_tambah_tbody_pertanyaan">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Ubah --}}
    <div class="modal fade pe-none !important" id="modal_ubah" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">
                        Indikator <span id="modal_ubah_indikator_id"></span> - Ubah
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <table class="table table-striped justify-content-start pe-none !important">
                        <tbody>
                            <tr>
                                <td>Domain</td>
                                <td id="modal_ubah_nama_domain"></td>
                                {{-- <td>{{$indikator->aspek->domain->nama_domain}}</td> --}}
                            </tr>
                            <tr>
                                <td>Aspek</td>
                                <td id="modal_ubah_nama_aspek"></td>
                                {{-- <td>{{$indikator->aspek->nama_aspek}}</td> --}}
                            </tr>
                            <tr>
                                <td>Indikator</td>
                                <td id="modal_ubah_nama_indikator"></td>
                                {{-- <td>{{$indikator->nama_indikator}}</td> --}}
                            </tr>
                        </tbody>
                    </table>

                    <div class="bd-example">
                        <div class="accordion" id="accordionExample">
                            <form action="/jawaban" id="form_ubah" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="bd-example table-responsive">
                                    <table id="datatable" class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tingkat</th>
                                                <th scope="col">Kriteria</th>
                                                <th scope="col">Capaian</th>
                                            </tr>
                                        </thead>
                                        <tbody id="modal_ubah_tbody_pertanyaan">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade pe-none !important" id="modal_ubah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Indikator {{$indikator->id}}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <table class="table table-striped justify-content-start pe-none !important">
                    <tbody>
                        <tr>
                            <td>Domain</td>
                            <td>{{$indikator->aspek->domain->nama_domain}}</td>
                        </tr>
                        <tr>
                            <td>Aspek</td>
                            <td>{{$indikator->aspek->nama_aspek}}</td>
                        </tr>
                        <tr>
                            <td>Indikator</td>
                            <td>{{$indikator->nama_indikator}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="bd-example">
                    <div class="accordion" id="accordionExample">
                        <form action="/jawaban" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="bd-example table-responsive">
                                <table id="datatable" class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tingkat</th>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Capaian</th>
                                        </tr>
                                    </thead>
                                    <?php $pertanyaan = App\Models\Pertanyaan::where('indikator_id', $indikator->id)->get(); ?>
                                    @foreach ($pertanyaan as $p)
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center">{{$p->tingkat}}</td>
                                            <td>
                                                <p>{{$p->kriteria}}</p>
                                                <div class="form-group">
                                                    <input type="hidden" name="pertanyaan_id[]" class="form-control" value="{{$p->id}}">
                                                    <input type="hidden" name="user_id[]" class="form-control" value="{{auth()->user()->id}}">
                                                    <textarea name="jawaban[]" class="form-control" id="Textarea" placeholder="Jawab di sini ..." rows="3"></textarea>
                                                </div>
                                            <td style="text-align:center">
                                                <input type="radio" class="form-check-input" required name="capaian" value="{{$p->tingkat}}">
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




    {{-- @foreach ($items as $indikator)
<!-- Modal 1-->
<div class="modal fade pe-none !important" id="Modal1{{$indikator->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Indikator {{$indikator->id}}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <table class="table table-striped justify-content-start pe-none !important">
                    <tbody>
                        <tr>
                            <td>Domain</td>
                            <td>{{$indikator->aspek->domain->nama_domain}}</td>
                        </tr>
                        <tr>
                            <td>Aspek</td>
                            <td>{{$indikator->aspek->nama_aspek}}</td>
                        </tr>
                        <tr>
                            <td>Indikator</td>
                            <td>{{$indikator->nama_indikator}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="bd-example">
                    <div class="accordion" id="accordionExample">
                        <form action="/update/jawaban" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="bd-example table-responsive">
                                <table id="datatable" class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tingkat</th>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Capaian</th>
                                        </tr>
                                    </thead>
                                    
                                   
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    {{-- <!-- Modal 2-->
<div class="modal fade pe-none !important" id="Modal2{{$indikator->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Indikator {{$indikator->id}}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <table class="table table-striped justify-content-start pe-none !important">
                    <tbody>
                        <tr>
                            <td>Domain</td>
                            <td>{{$indikator->aspek->domain->nama_domain}}</td>
                        </tr>
                        <tr>
                            <td>Aspek</td>
                            <td>{{$indikator->aspek->nama_aspek}}</td>
                        </tr>
                        <tr>
                            <td>Indikator</td>
                            <td>{{$indikator->nama_indikator}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="bd-example">
                    <div class="accordion" id="accordionExample">
                        <form action="/jawaban" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="bd-example table-responsive">
                                <table id="datatable" class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tingkat</th>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Capaian</th>
                                        </tr>
                                    </thead>
                                    <?php $pertanyaan = App\Models\Pertanyaan::where('indikator_id', $indikator->id)->get(); ?>
                                    @foreach ($pertanyaan as $p)
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center">{{$p->tingkat}}</td>
                                            <td>
                                                <p>{{$p->kriteria}}</p>
                                                <div class="form-group">
                                                    <input type="hidden" name="pertanyaan_id[]" class="form-control" value="{{$p->id}}">
                                                    <input type="hidden" name="user_id[]" class="form-control" value="{{auth()->user()->id}}">
                                                    <textarea name="jawaban[]" class="form-control" id="Textarea" placeholder="Jawab di sini ..." rows="3"></textarea>
                                                </div>
                                            <td style="text-align:center">
                                                <input type="radio" class="form-check-input" required name="capaian" value="{{$p->tingkat}}">
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach --}}
@stop

@push('scripts')
    <script>
        $(() => {
            $('#datatable-indikator').on('click', '.tombol_indikator_insert', async function(event) {
                let formData = new FormData()
                formData.append('id_indikator', $(this).data('id_indikator'))

                let result = await axios.post("{{ route('penilaian.get_pertanyaan') }}", formData)
                    .then(res => res.data)

                $('#modal_tambah').modal('show')

                $('#modal_tambah_nama_domain').html(result.data.nama_domain)
                $('#modal_tambah_nama_aspek').html(result.data.nama_aspek)
                $('#modal_tambah_nama_indikator').html(result.data.nama_indikator)
                $('#modal_tambah_indikator_id').html(result.data.id_indikator)

                let html = ''

                result.pertanyaan.map(item => {
                    html += `
                        <tr>
                            <td style="text-align:center">${item.tingkat}</td>
                            <td>
                                <p>${item.kriteria}</p>
                                <div class="form-group">
                                    <input type="hidden" name="pertanyaan_id[]" class="form-control" value="${item.id}">
                                    <input type="hidden" name="user_id[]" class="form-control" value="{{ auth()->user()->id }}">
                                    <textarea name="jawaban[]" class="form-control" id="Textarea" placeholder="Jawab di sini ..." rows="3"></textarea>
                                </div>
                            </td>
                            <td style="text-align:center">
                                <input type="radio" class="form-check-input" required name="capaian" value="${item.tingkat}">
                            </td>
                        </tr>
                    `
                })

                $('#modal_tambah_tbody_pertanyaan').html(html)
            })

            $('#datatable-indikator').on('click', '.tombol_indikator_update', async function(event) {
                let formData = new FormData()
                formData.append('id_indikator', $(this).data('id_indikator'))

                let result = await axios.post("{{ route('penilaian.get_pertanyaan') }}", formData)
                    .then(res => res.data)

                $('#modal_ubah').modal('show')

                $('#modal_ubah_nama_domain').html(result.data.nama_domain)
                $('#modal_ubah_nama_aspek').html(result.data.nama_aspek)
                $('#modal_ubah_nama_indikator').html(result.data.nama_indikator)
                $('#modal_ubah_indikator_id').html(result.data.id_indikator)

                let html = ''

                result.pertanyaan.map(item => {
                    html += `
                        <tr>
                            <td style="text-align:center">${item.tingkat}</td>
                            <td>
                                <p>${item.kriteria}</p>
                                <div class="form-group">
                                    <input type="hidden" name="jawaban_id[]" value="${item.id_jawaban}">
                                    <input type="hidden" name="pertanyaan_id[]"  value="${item.id}">
                                    <input type="hidden" name="user_id[]" value="{{ auth()->user()->id }}">
                                    <textarea name="jawaban[]" class="form-control" placeholder="Jawab di sini ..." rows="3">${item.jawaban_pertanyaan}</textarea>
                                </div>
                            </td>
                            <td style="text-align:center">
                                <input type="radio" class="form-check-input" required name="capaian" ${item.capaian > 0 ? 'checked' : ''} value="${item.tingkat}">
                            </td>
                        </tr>
                    `
                })

                $('#modal_ubah_tbody_pertanyaan').html(html)
            })

            $('#form_tambah').submit(function(event) {
                event.preventDefault()

                let formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}')
                axios.post("/jawaban", formData)
                    .then(res => {
                        $('#modal_tambah').modal('hide')

                        Swal.fire({
                            title: 'Berhasil!',
                            html: 'Berhasil menjawab pertanyaan',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    });
            })

            $('#form_ubah').submit(function(event) {
                event.preventDefault()

                let formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}')
                axios.post("/update_jawaban", formData)
                    .then(res => {
                        $('#modal_ubah').modal('hide')

                        Swal.fire({
                            title: 'Berhasil!',
                            html: 'Berhasil memperbarui jawaban',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    });
            })
        });
    </script>
@endpush
