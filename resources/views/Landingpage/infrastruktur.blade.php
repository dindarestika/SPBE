@extends('layouts.homepage')
@section('content')
    <section class="features" id="features">
        <h2 align="center">Infrastruktur SPBE</h2>
        <div class="container">
            <div class="row">
                @if ($jumlah_infrastruktur == 0)
                    <br><br><br><br><br><br><br><br><br>
                @elseif($jumlah_infrastruktur >= 0)
                    <table class="table table-bordered">
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($infrastruktur as $row)
                                <tr>
                                    <td>{{ $no++ }}.</td>
                                    <td>{{ $row->nama_infrastruktur }}</td>
                                    <td align="center">
                                        <a href="{{ $row->link_infrastruktur }}" target="blank" type="button"
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
