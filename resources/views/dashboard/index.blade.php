@extends('layouts.master')
@section('content')
              <div class="container-fluid iq-container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="d-flex justify-content-between align-items-center flex-wrap">
                              <div>
                                  <h1>Hello {{auth()->user()->nama_user}}!</h1>
                                  <p>Selamat datang di website SPBE</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--
              <div class="iq-header-img">
                  <img src="{{asset('admin/assets/images/dashboard/top-header.png')}}" alt="header" class="img-fluid w-100 h-100">
              </div>
               -->
<div class="row">
   <div class="col-md-12 col-lg-12">
      <div class="row row-cols-1">
         <div class="d-slider1 overflow-hidden ">
            <ul  class="swiper-wrapper list-inline m-0 p-0 mb-2">
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                           <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <a href="/user" ><p  class="mb-2">Jumlah User</p></a>
                           <h4 class="counter">{{$user}}</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-02" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                           <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <a href="/opd" ><p  class="mb-2">Jumlah OPD</p></a>
                           <h4 class="counter">{{$opd}}</h4>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-03" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                           <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <div class="progress-detail">
                           <a href="/agenda" ><p  class="mb-2">Jumlah Agenda</p></a>
                           <h4 class="counter">{{$agenda}}</h4>
                        </div>
                     </div>
                  </div>
               </li>
         </div>
      </div>
   </div>
   <div class="col-md-12 col-lg-8">
      <div class="row">      
         <div class="col-md-12 col-lg-12">
            <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="600">
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title mb-2">Data OPD</h4>
                     <p class="mb-0">
                        <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                           <path fill="#3a57e8" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                        </svg>
                        5 data OPD terbaru
                     </p>            
                  </div>
               </div>
               <div class="card-body p-0">
                  <div class="table-responsive mt-4">
                     <table id="basic-table" class="table table-striped mb-0" role="grid">
                        <thead>
                           <tr>
                              <th>OPD</th>
                              <th>Telepon</th>
                           </tr>
                        </thead>
                        @foreach($opdterbaru as $o)
                        <tbody>
                           <tr>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <h6>{{$o->nama_opd}}</h6>
                                 </div>
                              </td>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <h6>{{$o->telepon_opd}}</h6>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        @endforeach
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-12 col-lg-4">
      <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="600">
               <div class="card-header d-flex justify-content-between flex-wrap">
                  <div class="header-title">
                     <h4 class="card-title mb-2">Activity</h4>
                     <p class="mb-0">
                        <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                           <path fill="#17904b" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                        </svg>
                        5 agenda terbaru
                     </p>
                  </div>
               </div>
               <div class="card-body">
               @foreach($agendaterbaru as $a)
                  <div class=" d-flex profile-media align-items-top mb-2">
                     <div class="profile-dots-pills border-primary mt-1"></div>
                     <div class="ms-4">
                        <h6 class=" mb-1">{{$a->nama_acara}}</h6>
                        <span class="mb-0">{{$a->tanggal_acara}}</span>
                     </div>
                  </div>
               @endforeach
               </div>
            </div>
         </div>
      </div>
   </div> 
</div>
@endsection

