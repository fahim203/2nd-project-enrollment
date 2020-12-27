<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('backend/node_modules/rickshaw/rickshaw.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('backend/bower_components/chartist/dist/chartist.min.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('backend/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('backend/images/favicon.html') }}" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css">


</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ URL::to('/student-deshboard/'.$result->student_id) }}"><h3>Student Enrollment</h3></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile" style="background: white">
              <img src="{{ URL::to($result->student_image) }}" alt="">
            </div>
            <div class="details">
              <p class="user-name">{{strtoupper($result->student_name)}}</p>
              <p class="designation">
                @if($result ?? ''->student_department == 1)
                    <span>CSE</span>
                    @elseif($result ?? ''->student_department == 2)
                      <span>BBA</span>
                    @elseif($result ?? ''->student_department == 3)
                      <span>ECE</span>
                    @elseif($result ?? ''->student_department == 4)
                      <span>EEE</span>
                    @elseif($result ?? ''->student_department == 5)
                      <span>MBA</span>        
                @endif  
              </p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/student-setting/'.$result->student_id) }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Setting</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/student-profile/'.$result->student_id) }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/student-logout') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Logout</span>
              </a>
            </li>
            
            <!--main pages end-->
            
           
            <!--forms start-->
           
            
            
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Salt Admin</a> &copy; 2017
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="{{ URL::asset('backend/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ URL::asset('backend/node_modules/flot/jquery.flot.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/flot/jquery.flot.categories.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/rickshaw/vendor/d3.v3.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/rickshaw/rickshaw.min.js') }}"></script>
  <script src="{{ URL::asset('backend/bower_components/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/chartist-plugin-legend/chartist-plugin-legend.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/datatables.net/js/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::asset('backend/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ URL::asset('backend/js/data-table.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ URL::asset('backend/js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('backend/js/hoverable-collapse.js') }}"></script>
  <script src="{{ URL::asset('backend/js/misc.js') }}"></script>
  <script src="{{ URL::asset('backend/js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('backend/js/dashboard_1.js') }}"></script>
  <!-- End custom js for this page-->

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $(document).on("click","#delete",function(e){
        e.preventDefault();
        var link = $(this).attr('href');
          swal({
           title: "Are you want to delete?",
           text: "Once delete, it will be permanently delete!",
           icon: "warning",
           buttons: true,
          dangerMode: true,
         })
         .then((willDelete) => {
          if (willDelete){
            window.location.href = link;
          }else{
            swal("Safe Data");
          }
         });
      });
    </script>
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
