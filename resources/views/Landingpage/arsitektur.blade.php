@extends('layouts.homepage')
@section('content')
    <section class="features" id="features">
        <h2 align="center">Arsitektur SPBE</h2>
        <div class="container">
            <div class="row">
                @if ($jumlah_arsitektur == 0)
                    <br><br><br><br><br><br><br><br><br>
                @elseif($jumlah_arsitektur >= 0)
                    <table class="table table-bordered">
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($arsitektur as $row)
                                <tr>
                                    <td>{{ $no++ }}.</td>
                                    <td>{{ $row->nama_arsitektur }}</td>
                                    <td align="center">
                                        <a href="{{ $row->link_arsitektur }}" target="blank" type="button"
                                            class="bi bi-eye"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br><br><br><br><br><br><br><br><br>
                @endif

            </div>
        </div>
    </section>
@endsection
