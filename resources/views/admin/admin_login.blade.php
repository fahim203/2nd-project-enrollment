<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/font-awesome/css/font-awesome.min.css') }}"/>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('backend/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('backend/images/favicon.html') }}"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css">
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>
              <form method="post" action="{{ url('/adminlogin') }}">
                @csrf
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" class="form-control p_input" name="admin_email" required="">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="text" class="form-control p_input" name="admin_password" required="">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember" >
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div>
                <small class="text-center d-block">Don't have an Account?<a href="#"> Sign Up</a></small>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="{{ URL::asset('backend/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ URL::asset('backend/js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('backend/js/hoverable-collapse.js') }}"></script>
  <script src="{{ URL::asset('backend/js/misc.js') }}"></script>
  <script src="{{ URL::asset('backend/js/settings.js') }}"></script>
  <!-- endinject -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
</script>
</body>

</html>
