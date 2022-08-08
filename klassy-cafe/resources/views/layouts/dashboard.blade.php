<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- csrf-token -->
        
    <title>Dashboard - {{ config('app.name') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/') }}/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('/') }}/admin/assets/images/favicon.png" />

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{ route('home') }}"><img src="{{ url('/') }}/admin/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{ route('home') }}"><img src="{{ url('/') }}/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>

        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('foodmenu') }}">
              <span class="menu-icon">
                <i class="mdi mdi-food-fork-drink"></i>
              </span>
              <span class="menu-title">Food Menu</span>
            </a>
          </li>          
        </ul>
      </nav>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}">
              <img src="{{ url('/') }}/admin/assets/images/logo-mini.svg" alt="logo" />
            </a>
          </div>

          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">

              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{ url('/') }}/admin/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <a class="dropdown-item preview-item" href="{{ route('home') }}" target="_blank">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">View Site</p>
                    </div>
                  </a>

                  <a class="dropdown-item preview-item" href="{{ route('profile.show') }}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-account-circle text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Edit Profile</p>
                    </div>
                  </a>

                  <div class="dropdown-divider"></div>

                  <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="dropdown-item preview-item" onclick="event.preventDefault();this.closest('form').submit();">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Log out</p>
                      </div>
                    </a>
                  </form>
                </div>
              </li>
              
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @yield('content_dashboard')

          </div>
          <!-- content-wrapper ends -->
          
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('/') }}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('/') }}/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ url('/') }}/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{ url('/') }}/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{ url('/') }}/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ url('/') }}/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('/') }}/admin/assets/js/off-canvas.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/hoverable-collapse.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/misc.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/settings.js"></script>
    <script src="{{ url('/') }}/admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('/') }}/admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

  </body>
</html>