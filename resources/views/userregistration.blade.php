<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary ">E</span>Shopper</h1>
                  {{-- <img src="{{asset('admin/assets/images/logo.svg')}}"> --}}
                </div>
                <h4>Registration</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" method="post" action="{{route('register-user')}}">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="User Name" name="name" value="{{old('name')}}">
                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" placeholder="Email" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block  btn-lg font-weight-medium" type="submit" style="background-color:#D19C97; color:white;">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="userlogin" class="text-primary">Login</a>
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
    <!-- endinject -->
  </body>
</html>