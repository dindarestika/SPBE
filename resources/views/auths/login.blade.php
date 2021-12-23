
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Evaluasi SPBE</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}" />
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('admin/assets/css/core/libs.min.css')}}" />
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/vendor/aos/dist/aos.css')}}" />
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/css/hope-ui.min.css?v=1.1.0')}}" />
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/css/custom.min.css?v=1.1.0')}}" />
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/css/assets/css/dark.min.css')}}"/>
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{asset('admin/assets/css/rtl.min.css')}}"/>
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <h2 class="mb-2 text-center">LOGIN ADMIN</h2>
                           <p class="text-center">Login to stay connected</p>
                           <form class="form-auth-small" action="/postlogin" method="POST">
							         {{csrf_field()}}
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="text" class="form-label">Username</label>
                                       <input name="username" type="text" class="form-control" placeholder="">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder=" ">
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sign-bg">
                  <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                     <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"/>
                     <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"/>
                     <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"/>
                     <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"/>
                     </g>
                  </svg>
               </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{asset('admin/assets/images/auth/01.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>
	
    <!-- Library Bundle Script -->
    <script src="{{asset('admin/assets/js/core/libs.min.js')}}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{asset('admin/assets/js/core/external.min.js')}}"></script>
    <!-- Widgetchart Script -->
    <script src="{{asset('admin/assets/js/charts/widgetcharts.js')}}"></script>
    <!-- mapchart Script -->
    <script src="{{asset('admin/assets/js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('admin/assets/js/charts/dashboard.js')}}" defer></script>
    <!-- fslightbox Script -->
    <script src="{{asset('admin/assets/js/plugins/fslightbox.js')}}"></script>
    <!-- Settings Script -->
    <script src="{{asset('admin/assets/js/plugins/setting.js')}}"></script>
    <!-- Form Wizard Script -->
    <script src="{{asset('admin/assets/js/plugins/form-wizard.js')}}"></script>
    <!-- AOS Animation Plugin-->
    <script src="{{asset('admin/assets/vendor/aos/dist/aos.js')}}"></script>
    <!-- App Script -->
    <script src="{{asset('admin/assets/js/hope-ui.js')}}" defer></script>
  </body>
</html>