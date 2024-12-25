<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kurirmoo - Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/ti-icons/css/themify-icons.css') }}">
    <!-- End plugin css for this page -->

    {{-- icon --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">
    <!-- endinject -->
    <link href="{{ asset('assets_landingpage/img/logo-kurirmoo.png') }}" rel="icon" />
  </head>
  <body>
<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    {{-- <h3>DPRD Kab. SBB</h3> --}}
    <a class="navbar-brand brand-logo me-5" href="/home"><img src="{{ asset('assets_landingpage/img/logo-kurirmoo.png') }}" class="me-2" alt="logo" /> KURIRMOO</a>
    <a class="navbar-brand brand-logo-mini" href="/home"><img src="{{ asset('assets_landingpage/img/logo-kurirmoo.png') }}" alt="logo" />KURIRMOO</a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="{{ Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets_admin/images/faces/face1.jpg') }}" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          {{-- <a class="dropdown-item">
            <i class="ti-settings text-primary"></i> Settings </a> --}}
          <a class="dropdown-item" href="{{ route('logout') }}">
            <i class="ti-power-off text-primary"></i> Logout </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('components.admin.sidebar')

            <!-- partial -->
            <div class="main-panel">
                {{-- Content --}}
                {{ $slot }}

                @include('components.admin.footer')
                @include('sweetalert::alert')
            </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
</div>

        <!-- plugins:js -->
        <script src="{{ asset('assets_admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets_admin/vendors/chart.js/chart.umd.js') }}"></script>
        <!-- inject:js -->
        <script src="{{ asset('assets_admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets_admin/js/template.js') }}"></script>
        <script src="{{ asset('assets_admin/js/settings.js') }}"></script>
        <script src="{{ asset('assets_admin/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('assets_admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets_admin/js/dashboard.js') }}"></script>
        <!-- End custom js for this page-->
      </body>
</html>


