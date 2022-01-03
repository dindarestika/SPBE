@extends('layouts.homepage')
@section('content')
<section class="visi_misi">
  		<div class="row">
  			<div class="col-md-10">
  				<div class="visi">
  					<h1><i class="bi bi-book-fill"></i><span>  Visi</span></h1>
					  @foreach ($visi as $visi)
					  <p> “{{$visi->visi}}” </p>
					  @endforeach
  				</div>
  			</div>
  			<br>
  			<div class="col-md-10">
  				<div class="misi">
  					<h1><i class="bi bi-caret-right-fill"></i><span>  Misi</span></h1>
  					<hr>
  					<ul>
					@foreach ($misi as $misi)
					<li class="fa-li" class="fas fa-check-square">{{$misi->misi}}</li>
					@endforeach
  					</ul>
  				</div>
  			</div>
  		</div>
</section>
@stop

