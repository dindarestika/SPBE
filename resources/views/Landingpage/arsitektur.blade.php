@extends('layouts.homepage')
@section('content')
<div class="gallery__page">
    <div class="gallery__warp">
      <div class="row">
        <!--
        <div class="col-lg-3 col-md-4 col-sm-6">
          <a class="gallery__item fresco" href="img/gallery/1.jpg" data-fresco-group="gallery">
            <img src="img/gallery/1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <a class="gallery__item fresco" href="img/gallery/2.jpg" data-fresco-group="gallery">
            <img src="img/gallery/2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <a class="gallery__item fresco" href="img/gallery/3.jpg" data-fresco-group="gallery">
            <img src="img/gallery/3.jpg" alt="">
          </a>
        </div>
        -->
        
        &nbsp;<br/>
        <div class="col-md-12 col-sm-12">                   
          <img alt="" src="{{asset('home/assets/images/arsitektur spbe semarang.jpeg')}}" style="width: 1280px; height: 720px;" />                
          &nbsp;<br/>
        </div>
      </div>
    </div>
</div>
@endsection