@extends('layouts.homepage')
@section('content')
    <section class="features" id="features">
        <h2 align="center">Dasar Hukum SPBE</h2>
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($dasarhukum as $row)
                            <tr>
                                <td>{{ $no++ }}.</td>
                                <td>{{ $row->nama_dasarhukum }}</td>
                                <td align="center">
                                    <a href="{{ $row->link_dasarhukum }}" target="blank" type="button"
                                        class="bi bi-eye"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
