@extends('layouts.homepage')
@section('content')
      <!-- ======= Contact Section ======= -->
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="section-title">Contact Us</h2>
            </div>
          </div>
  
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4">
              <div class="info">
                @foreach ($kontak as $kontak)
                <div>
                  <i class="bi bi-geo-alt"></i>
                  <p>{{$kontak->alamat}}</p>
                </div>
  
                <div>
                  <i class="bi bi-envelope"></i>
                  <p>{{$kontak->email}}</p>
                </div>
  
                <div>
                  <i class="bi bi-phone"></i>
                  <p>{{$kontak->no_telephone}}</p>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
@endsection