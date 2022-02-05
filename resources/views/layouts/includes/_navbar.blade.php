<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
    <div class="container-fluid navbar-inner">
        <a href="../dashboard/index.html" class="navbar-brand">
            <!--Logo start-->
            <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)"
                    fill="currentColor" />
                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)"
                    fill="currentColor" />
                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)"
                    fill="currentColor" />
                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)"
                    fill="currentColor" />
            </svg>
            <!--logo End-->
            <h4 class="logo-title">Evaluasi SPBE</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">

        </div>
        {{-- <div class="input-group search-input">
              <span class="input-group-text" id="search-input">
                <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </span>
              <input type="search" class="form-control" placeholder="Search...">
            </div> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <span class="navbar-toggler-bar bar1 mt-2"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center navbar-list mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (auth()->user()->foto_user)
                            <img src="{{ asset('storage/' . auth()->user()->foto_user) }}" alt="User-Profile"
                                class="img-fluid avatar avatar-50 avatar-rounded">
                        @else
                            <img src="{{ asset('admin/assets/images/avatars/01.png') }}" alt="User-Profile"
                                class="img-fluid avatar avatar-50 avatar-rounded">
                        @endif
                        <div class="caption ms-3 d-none d-md-block ">
                            <h6 class="mb-0 caption-title">{{ auth()->user()->nama_user }}</h6>
                            <p class="mb-0 caption-sub-title">{{ auth()->user()->role->nama_role }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item {{ $title === 'Profile' ? 'active' : '' }}"
                                href="/profile">Profile</a></li>
                        <li><a class="dropdown-item {{ $title === 'Setting' ? 'active' : '' }}"
                                href="/editprofil">Setting</a></li>
                        <li><a class="dropdown-item" href="/">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> <!-- Nav Header Component Start -->
<div class="iq-navbar-header" style="height: 70px;">

</div> <!-- Nav Header Component End -->
