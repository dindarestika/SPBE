@extends('layouts.homepage')
@section('content')
    <section class="features" id="features">
        <h2 align="center">Hasil Evaluasi SPBE</h2>
        <div class="container">
            <div class="row">
                @if ($jumlah_hasilevaluasi == 0)
                    <br><br><br><br><br><br><br><br><br>
                @elseif($jumlah_hasilevaluasi >= 0)
                    <table class="table table-bordered">
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($hasilevaluasi as $row)
                                <tr>
                                    <td>{{ $no++ }}.</td>
                                    <td>{{ $row->nama_hasilevaluasi }}</td>
                                    <td align="center">
                                        <a href="{{ $row->link_hasilevaluasi }}" target="blank" type="button"
                                            class="bi bi-eye"></a>
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
