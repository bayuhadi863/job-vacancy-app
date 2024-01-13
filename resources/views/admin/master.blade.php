<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/template1/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('/template1/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/template1/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/template1/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('/template1/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('/template1/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/template1/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('/template1/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/template1/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/template1/images/favicon.png')}}" />

  @stack('styles')
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <!-- content-wrapper ends -->
        <div class="content-wrapper">
          <h2>@yield('title')</h2>
          @yield('content')
        </div>
        <!-- partial:partials/_footer.html -->
        @include('admin.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('/template1/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('/template1/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('/template1/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('/template1/vendors/progressbar.js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('/template1/js/off-canvas.js')}}"></script>
  <script src="{{asset('/template1/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/template1/js/template.js')}}"></script>
  <script src="{{asset('/template1/js/settings.js')}}"></script>
  <script src="{{asset('/template1/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/template1/js/dashboard.js')}}"></script>
  <script src="{{asset('/template1/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  @stack('scripts')
  @include('sweetalert::alert')
</body>

</html>
