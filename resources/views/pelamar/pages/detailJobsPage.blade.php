@extends('pelamar.master')

@section('content')
<main>

  <!-- Hero Area Start-->
  <div class="slider-area ">
  <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('/template2/assets/img/hero/about.jpg')}}">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="hero-cap text-center">
                      <h2>{{$jobs->title}}</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  <!-- Hero Area End -->
  <!-- job post company Start -->
  <div class="job-post-company pt-120 pb-120">
      <div class="container">
          <div class="row justify-content-between">
              <!-- Left Content -->
              <div class="col-xl-7 col-lg-8">
                  <!-- job single -->
                  <div class="single-job-items mb-50">
                      <div class="job-items">
                          <div class="job-tittle">
                              <a href="#">
                                  <h4>{{$jobs->title}}</h4>
                              </a>
                              <ul>
                                <li><i class="fas fa-map-marker-alt"></i>{{$jobs->location}}</li>
                              </ul>
                          </div>
                      </div>
                  </div>
                    <!-- job single End -->
                  <div class="job-post-details">
                      <div class="post-details1 mb-50">
                          <!-- Small Section Tittle -->
                          <div class="small-section-tittle">
                              <h4>Job Description</h4>
                          </div>
                          <p>{!! nl2br(e($jobs->description)) !!}</p>
                      </div>
                      <div class="post-details2  mb-50">
                          <!-- Small Section Tittle -->
                          <div class="small-section-tittle">
                              <h4>Requirements</h4>
                          </div>
                          <p>{!! nl2br(e($jobs->requirements)) !!}</p>
                      </div>
                      <div class="post-details2  mb-50">
                          <!-- Small Section Tittle -->
                          <div class="small-section-tittle">
                              <h4>Categories</h4>
                          </div>
                          <p>{{$jobs->categories->name}}</p>
                      </div>
                  </div>

              </div>
              <!-- Right Content -->
              <div class="col-xl-4 col-lg-4">
                  <div class="post-details3  mb-50">
                      <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Job Overview</h4>
                    </div>
                    <ul>
                        <li>Posted at : <span>{{$jobs->created_at->format('Y-m-d')}}</span></li>
                        <li>Updated at : <span>{{$jobs->updated_at->format('Y-m-d')}}</span></li>
                        <li>Application deadline : <span>{{$jobs->close_date}}</span></li>
                    </ul>
                  <div class="apply-btn2">
                    <form action="/apply/{{$jobs->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn">Apply Now</button>
                      </form>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <!-- job post company End -->

</main>
@endsection