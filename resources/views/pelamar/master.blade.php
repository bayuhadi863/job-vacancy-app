<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('/template2/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('/template2/assets/css/style.css')}}">

            @stack('styles')
  </head>

  <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
              <div class="preloader-circle"></div>
              <div class="preloader-img pere-text">
                  <img src="assets/img/logo/logo.png" alt="">
              </div>
          </div>
      </div>
  </div>
  <!-- Preloader End -->
    <!-- Header Start-->
    @include('pelamar.navbar')
    <!-- Header End-->
    <main>
      @yield('content') 
    </main>
    <!-- Footer Start -->
    @include('pelamar.footer')
    <!-- Footer End -->
    

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('/template2/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('/template2/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('/template2/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('/template2/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('/template2/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('/template2/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/template2/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('/template2/assets/js/price_rangs.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('/template2/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('/template2/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('/template2/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('/template2/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('/template2/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('/template2/assets/js/jquery.sticky.js')}}"></script>
        
    <!-- contact js -->
    <script src="{{asset('/template2/assets/js/contact.js')}}"></script>
    <script src="{{asset('/template2/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('/template2/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/template2/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('/template2/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('/template2/assets/js/plugins.js')}}"></script>
        <script src="{{asset('/template2/assets/js/main.js')}}"></script>
        
        @stack('scripts')
    </body>
</html>