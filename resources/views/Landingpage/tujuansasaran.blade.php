@extends('layouts.homepage')
@section('content')
<section class="tujuan_sasaran">
  <div class="row">
    <div class="col-md-10">
      <div class="tujuan">
        <h1><i class="bi bi-book-fill"></i><span> Tujuan</span></h1>
        <hr>
        <ul>
          @foreach ($tujuan as $t)
          <li>{{$t->tujuan}}</li>
          @endforeach
        </ul>
      </div>
    </div>
    <br>
    <div class="col-md-10">
      <div class="sasaran">
        <h1><i class="bi bi-bookmark-fill"></i><span> Sasaran</span></h1>
        <hr>
        <ul>
          @foreach ($sasaran as $s)
          <li>{{$s->sasaran}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
@stop

