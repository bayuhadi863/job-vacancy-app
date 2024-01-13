<header>
  <!-- Header Start -->
<div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-md-2">
                      <!-- Logo -->
                      <div class="logo">
                          <a href="index.html"><img src="{{asset('/template2/assets/img/logo/logo.png')}}" alt=""></a>
                      </div>  
                  </div>
                  <div class="col-lg-9 col-md-9">
                      <div class="menu-wrapper">
                          <!-- Main-menu -->
                          <div class="main-menu">
                              <nav class="d-none d-lg-block">
                                  <ul id="navigation">
                                      <li><a href="/">Home</a></li>
                                      <li><a href="/joblist">Find a Jobs </a></li>
                                      @auth
                                      <li><a href="/cvs">My CV</a></li>
                                      <li><a href="/applicationhistory">Application</a></li>
                                      @endauth
                                  </ul>
                              </nav>
                          </div>   
                          <!-- Header-btn -->    
                          <div class="header-btn d-none f-right d-flex justify-content-center align-items-center" style="gap: 20px;">
                            @auth
                              <a href="/cvs" style="color: black; font-size: 20px; font-weight: bold;">{{Auth::user()->name}}</a>
                              <a class="btn head-btn1 py-4 px-4" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth
                        @guest
                        <a href="{{ route('register') }}" class="btn head-btn1">Register</a>
                        <a href="{{ route('login') }}" class="btn head-btn2">Login</a>   
                        @endguest
                          </div>
                      </div>
                  </div>
                  <!-- Mobile Menu -->
                  <div class="col-12">
                      <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
              </div>
          </div>
    </div>
</div>
  <!-- Header End -->
</header>