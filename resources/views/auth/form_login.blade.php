
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Kurirmoo</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}">
    <!-- endinject -->
    <link href="{{ asset('assets_landingpage/img/logo-kurirmoo.png') }}" rel="icon" />

  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <h2>LOGIN ADMIN</h2>
                </div>
                <h6 class="font-weight-light">Selamat Datang Kurirmoo!!</h6>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mb-4">
                    {{-- <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div> --}}
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                  </div>

                  <div class="mt-3 d-grid gap-2">
                      <button class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN</button>
                </div>
                <div class="mt-3 text-center">
                    <a href="/" class="btn btn-sm btn-danger "><i class="mdi mdi-arrow-bottom-left-bold-outline"></i> Home</a>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('sweetalert::alert')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets_admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets_admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets_admin/js/template.js') }}"></script>
    <script src="{{ asset('assets_admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets_admin/js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>