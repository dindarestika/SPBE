@extends('layouts.homepage')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <a class="hero-brand" href="index.html" title="Home"><img alt="SPBE Logo"
                            src="{{ asset('home/assets/img/spbe.png') }}"></a>
                </div>
            </div>

            <div class="col-md-12">
                <h1>SPBE</h1>
                <p class="tagline">SISTEM PEMERINTAHAN BERBASIS ELEKTRONIK KOTA SURAKARTA</p>
            </div>
        </div>
    </section>
    <!--End Hero -->
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
                        <a href="/dasarhukum">
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
                        <a href="/masterplan">
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

                <div class="feature-col col-lg-4 col-xs-12">
                    <div class="card card-block text-center">
                        <a href="/hasilevaluasi">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-award"></i>
                                </div>
                            </div>

                            <div>
                                <h3>Hasil Evaluasi</h3>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
