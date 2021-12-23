@extends('layouts.homepage')
@section('content')
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">
              <a class="hero-brand" href="index.html" title="Home"><img alt="SPBE Logo" src="{{asset('home/assets/img/spbe.png')}}"></a>
            </div>
          </div>

          <div class="col-md-12">
            <h1>SPBE</h1>
            <p class="tagline">SISTEM PEMERINTAHAN BERBASIS ELEKTRONIK</p>
          </div>
        </div>
      </section> <!--End Hero -->
      <!-- ======= Features Section ======= -->
      <section class="features" id="features">
        <div class="container">
          <h2 class="text-center">Tentang</h2>
          <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <a href="/visimisi">
                 <div>
                  <div class="feature-icon">
                    <i class="bi bi-briefcase"></i>
                  </div>
                 </div>
                 <div>
                  <h3>Visi & Misi</h3>
                 </div>               
                </a>
              </div>
            </div>
  
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <a href="/tujuansasaran">
                  <div>
                    <div class="feature-icon">
                      <i class="bi bi-card-checklist"></i>
                    </div>
                  </div>
                  <div>
                    <h3>Tujuan & Sasaran</h3>
                  </div>                
                </a>
              </div>
            </div>
  
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <a href="#">
                  <div>
                    <div class="feature-icon">
                      <i class="bi bi-bar-chart"></i>
                    </div>
                  </div>
  
                  <div>
                    <h3>Dasar Hukum</h3>
                  </div>           
                </a>
              </div> 
            </div>
          </div>
  
          <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <a href="#">
                 <div>
                  <div class="feature-icon">
                    <i class="bi bi-binoculars"></i>
                  </div>
                 </div>
  
                 <div>
                  <h3>Master Plan e-Goverment</h3>
                 </div>                        
                </a>
              </div>   
            </div>
  
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <a href="/arsitektur">
                 <div>
                  <div class="feature-icon">
                    <i class="bi bi-brightness-high"></i>
                  </div>
                 </div>
  
                 <div>
                  <h3>Arsitektur SPBE</h3>
                 </div>                          
                </a>
              </div> 
            </div>
          </div>
        </div>
      </section>
  
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
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
  
          </div>
        </div>
      </section><!-- End Contact Section -->
@endsection