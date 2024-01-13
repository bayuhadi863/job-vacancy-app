@extends('pelamar.master')

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@endpush

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
  <!-- Mobile Menu -->
  <div class="slider-active">
      <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset("/template2/assets/img/hero/h1_hero.jpg")}}">
          <div class="container">
              <div class="row">
                  <div class="col-xl-6 col-lg-9 col-md-10">
                      <div class="hero__caption">
                          <h1 data-aos="fade-up">Find the most exciting startup jobs</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- slider Area End-->
<!-- Our Services Start -->
<div class="our-services section-pad-t30">
  <div class="container">
      <!-- Section Tittle -->
      <div class="row">
          <div class="col-lg-12">
              <div class="section-tittle text-center">
                  <span data-aos="fade-up">FEATURED TOURS Packages</span>
                  <h2 data-aos="fade-up">Browse Top Categories </h2>
              </div>
          </div>
      </div>
      <div class="row d-flex justify-contnet-center">
        @forelse ($categories->take(8) as $item)
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
              <div class="single-services text-center mb-30">
                  <div class="services-cap">
                    <h5>{{$item->name}}</h5>
                    <span>({{$item->jobs->count()}})</span>
                  </div>
              </div>
          </div>
        @empty
          <h2 data-aos="fade-up">Data Categories Kosong</h2>
        @endforelse
      </div>
      <!-- More Btn -->
      <!-- Section Button -->
      <div class="row">
          <div class="col-lg-12">
              <div class="browse-btn2 text-center mt-50">
                  <a href="/joblist" class="border-btn2" data-aos="fade-up">Browse All Sectors</a>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Our Services End -->
<!-- Online CV Area Start -->
<div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="{{asset('/template2/assets/img/gallery/cv_bg.jpg')}}">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xl-10">
              <div class="cv-caption text-center">
                  <p class="pera1" data-aos="fade-up">FEATURED TOURS Packages</p>
                  <p class="pera2" data-aos="fade-up"> Make a Difference with Your Online Resume!</p>
                  <!-- Edit CV, Pengalaman Kerja dan Pendidikan -->                    
                    <a href="/cvs" class="border-btn2 border-btn4" data-aos="fade-up">Edit your cv</a>
                  <!-- End Edit CV, Pengalaman Kerja dan Pendidikan -->
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Online CV Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
  <div class="container">
      <!-- Section Tittle -->
      <div class="row">
          <div class="col-lg-12">
              <div class="section-tittle text-center">
                  <span data-aos="fade-up">Recent Job</span>
                  <h2 data-aos="fade-up">Featured Jobs</h2>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-xl-10">
            @forelse ($jobs->take(5) as $item)
            <div class="single-job-items mb-30" data-aos="fade-up">
              <div class="job-items">
                  <div class="job-tittle">
                      <a href="/jobdetail/{{$item->id}}"><h4>{{$item->title}}</h4></a>
                      <ul>
                          <li><i class="fas fa-map-marker-alt"></i>{{$item->location}}</li>
                      </ul>
                  </div>
              </div>
              <div class="items-link f-right">
                  <a href="/jobdetail/{{$item->id}}">Apply</a>
                  <span>{{$item->created_at->diffForHumans()}}</span>
              </div>
          </div>
            @empty
              <h2 data-aos="fade-up">Jobs Tidak Ada</h2>
            @endforelse
              
          </div>
      </div>
  </div>
</section>
<!-- Featured_job_end -->
<!-- How  Apply Process Start-->
<div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
  <div class="container">
      <!-- Section Tittle -->
      <div class="row">
          <div class="col-lg-12">
              <div class="section-tittle white-text text-center">
                  <span data-aos="fade-up">Apply process</span>
                  <h2 data-aos="fade-up"> How it works</h2>
              </div>
          </div>
      </div>
      <!-- Apply Process Caption -->
      <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <div class="single-process text-center mb-30">
                  <div class="process-ion">
                      <span class="flaticon-search"></span>
                  </div>
                  <div class="process-cap">
                     <h5>1. Search a job</h5>
                     <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <div class="single-process text-center mb-30">
                  <div class="process-ion">
                      <span class="flaticon-curriculum-vitae"></span>
                  </div>
                  <div class="process-cap">
                    <h5>2. Apply for job</h5>
                    <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <div class="single-process text-center mb-30">
                  <div class="process-ion">
                      <span class="flaticon-tour"></span>
                  </div>
                  <div class="process-cap">
                    <h5>3. Get your job</h5>
                    <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- How  Apply Process End-->
<!-- Testimonial Start -->
<div class="testimonial-area testimonial-padding">
  <div class="container">
      <!-- Testimonial contents -->
      <div class="row d-flex justify-content-center" data-aos="fade-up">
          <div class="col-xl-8 col-lg-8 col-md-10">
              <div class="h1-testimonial-active dot-style">
                  <!-- Single Testimonial -->
                  <div class="single-testimonial text-center">
                      <!-- Testimonial Content -->
                      <div class="testimonial-caption ">
                          <!-- founder -->
                          <div class="testimonial-founder  ">
                              <div class="founder-img mb-30">
                                  <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                  <span>Margaret Lawson</span>
                                  <p>Creative Director</p>
                              </div>
                          </div>
                          <div class="testimonial-top-cap">
                              <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                          </div>
                      </div>
                  </div>
                  <!-- Single Testimonial -->
                  <div class="single-testimonial text-center">
                      <!-- Testimonial Content -->
                      <div class="testimonial-caption ">
                          <!-- founder -->
                          <div class="testimonial-founder  ">
                              <div class="founder-img mb-30">
                                  <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                  <span>Margaret Lawson</span>
                                  <p>Creative Director</p>
                              </div>
                          </div>
                          <div class="testimonial-top-cap">
                              <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                          </div>
                      </div>
                  </div>
                  <!-- Single Testimonial -->
                  <div class="single-testimonial text-center">
                      <!-- Testimonial Content -->
                      <div class="testimonial-caption ">
                          <!-- founder -->
                          <div class="testimonial-founder  ">
                              <div class="founder-img mb-30">
                                  <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                  <span>Margaret Lawson</span>
                                  <p>Creative Director</p>
                              </div>
                          </div>
                          <div class="testimonial-top-cap">
                              <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Testimonial End -->

@endsection
