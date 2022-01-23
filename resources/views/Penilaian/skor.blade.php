@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-12 ">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h5 class="card-title">Detail Evaluasi</h5>
                </div>
                <div class="right">
                    <a href="/lihat-penilaian/{{$evaluasi->id}}/detail" type="button"
                        class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </div>
            <div class="card-body d-flex pb-0">
                <table class="table table-striped">

                    <tbody>
                        <tr>
                            <td width="100">Tahun</td>
                            <td>{{$evaluasi->tahun_evaluasi}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{$evaluasi->nama_evaluasi}}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>{{$evaluasi->deskripsi_evaluasi}}</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div>
        <!-- Tabel -->
        <div class="row">
            <div class="profile-content tab-content">
                <div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="header-title ">
                                    <h5 class="d-flex justify-content-center mb-2">Nilai Index</h5>
                                    <span class="d-flex justify-content-center mb-2">Total</span>
                                    <h1 class="d-flex justify-content-center mb-2">4.42</h1>

                                    <div id="chart-skor"></div>

                                    <span class="d-flex justify-content-center mb-2">Domain</span>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-striped d-flex justify-content-center text-center pb-0">
                                        <tbody>
                                            <tr>
                                                @foreach($data_domain as $dd)
                                                <td>{{$dd->nama_domain}}</td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td>5.00</td>
                                                <td>3.80</td>
                                                <td>3.64</td>
                                                <td>4.88</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <div class="container-sm">
                                    <table class="table table-striped justify-content-center">
                                        <tbody>
                                            <tr>
                                                <td class="p-0" colspan="2">
                                                    <span class="d-flex justify-content-center
                                                                    text-center mb-2">Aspek</span>
                                                </td>
                                            </tr>
                                            @foreach($data_aspek as $da)
                                            <tr>
                                                <td>{{$da->nama_aspek}}</td>
                                                <td>5.00</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        </div>
                        </adiv>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
        aria-labelledby="shareBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>

    @stop

    @push('scripts')
    <script>
        $(document).ready(function () {

            axios.post("{{ route('load.grafik') }}")
                .then(res => {
                    console.log(res)
                    let result = res.data.data

                    let options = {
                        series: result.series,
                        chart: {
                            height: 800,
                            type: 'radar',
                        },
                        dataLabels: {
                            enabled: true
                        },
                       
                        plotOptions: {
                            radar: {
                                size: 350,
                                // polygons: {
                                //     strokeColors: '#e9e9e9',
                                //     fill: {
                                //         colors: ['#f8f8f8', '#fff']
                                //     }
                                // }
                            }
                        },
                        title: {
                            text: ''
                        },
                        colors: ['#1A73E8', '#B32824'],
                        markers: {
                            size: 4,
                            colors: ['#fff'],
                            strokeColor: '#FF4560',
                            strokeWidth: 2,
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return val
                                }
                            }
                        },
                        xaxis: {
                            categories: result.categories
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: function(val, i) {
                                    if (i % 2 === 0) {
                                        return val
                                    } else {
                                        return ''
                                    }
                                }
                            }
                        }
                    };

                    let chart = new ApexCharts(document.querySelector("#chart-skor"), options);
                    chart.render();
                })
        })
    </script>
    @endpush