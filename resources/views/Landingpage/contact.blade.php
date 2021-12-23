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
                <div>
                  <i class="bi bi-geo-alt"></i>
                  <p>Jl. Jend. Sudirman, Kedung Lumbu, Ps. Kliwon,<br>Surakarta, Jawa Tengah 57133</p>
                </div>
  
                <div>
                  <i class="bi bi-envelope"></i>
                  <p>diskominfosp@surakarta.go.id</p>
                </div>
  
                <div>
                  <i class="bi bi-phone"></i>
                  <p>(0271) 643454</p>
                </div>
  
              </div>
            </div>
  
            <div class="col-lg-5 col-md-8">
              <div class="form">
                <form action="/emailsend" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
  
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
@endsection