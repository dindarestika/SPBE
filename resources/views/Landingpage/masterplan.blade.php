@extends('layouts.homepage')
@section('content')
    <section class="features" id="features">
        <h2 align="center">Master Plan E-Goverment</h2>
        <div class="container">
            <div class="row">
                @if ($jumlah_masterplan == 0)
                    <br><br><br><br><br><br><br><br><br>
                @elseif($jumlah_masterplan >= 0)
                    <table class="table table-bordered">
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($masterplan as $row)
                                <tr>
                                    <td>{{ $no++ }}.</td>
                                    <td>{{ $row->nama_masterplan }}</td>
                                    <td align="center">
                                        <a href="{{ $row->link_masterplan }}" target="blank" type="button"
                                            class="btn btn-primary">Lihat</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </section>
@endsection
