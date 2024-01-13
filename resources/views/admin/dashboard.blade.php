@extends('admin.master')

@section('title')
Dashboard
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="home-tab">
        <div class="tab-content tab-content-basic">
          <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
            <div class="row">
              <div class="col-sm-12">
                <div class="statistics-details d-flex align-items-center justify-content-between">
                  <div>
                    <p class="statistics-title">Total User</p>
                    <h3 class="rate-percentage">{{$user->count()}}</h3>
                  </div>
                  <div>
                    <p class="statistics-title">Total Lowongan Pekerjaan</p>
                    <h3 class="rate-percentage">{{$jobs->count()}}</h3>
                  </div>
                  <div>
                    <p class="statistics-title">Total Kategori Pekerjaan</p>
                    <h3 class="rate-percentage">{{$categories->count()}}</h3>
                  </div>
                  <div class="d-none d-md-block">
                    <p class="statistics-title">Total Lamaran Pekerjaan</p>
                    <h3 class="rate-percentage">{{$applications->count()}}</h3>
                  </div>
                </div>
              </div>
            </div> 
            
            <div class="row">
              <div class="col-lg-8 d-flex flex-column">
                
                
                <div class="row flex-grow">
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                          <div>
                            <h4 class="card-title card-title-dash">Lamaran Terbaru</h4>
                          </div>
                        </div>
                        <div class="table-responsive  mt-1">
                          <table class="table select-table">
                            <thead>
                              <tr>
                                <th>
                                  <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                  </div>
                                </th>
                                <th>User</th>
                                <th>Job</th>
                                <th>Company</th>
                                <th>Time</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($applications->sortByDesc('created_at')->take(5) as $item)
                              <tr>
                                <td>
                                  <div class="form-check form-check-flat mt-0">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex ">
                                    @if ($item->user->cv)
                                    <img src="{{asset('photo/' . $item->user->cv->photo)}}" alt="" style="object-fit: cover">  
                                    @else
                                    <img class="img-sm rounded-10" src="/template1/images/faces/face1.jpg" alt="profile">
                                    @endif
                                    
                                    <div>
                                      <h6>{{$item->user->name}}</h6>
                                      <p>{{$item->user->role}}</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <h6>{{$item->jobs->title}}</h6>
                                  <p>{{$item->jobs->categories->name}}</p>
                                </td>
                                <td>
                                  <h6>{{$item->jobs->location}}</h6>
                                </td>
                                <td><p>{{$item->created_at->diffForHumans()}}</p></td>
                              </tr>
                              @empty
                                <tr>
                                  <td><p>Data Kosong</p></td>
                                </tr>
                              @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
              <div class="col-lg-4 d-flex flex-column">
                <div class="row flex-grow">
                  <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                              <div>
                                <h4 class="card-title card-title-dash">User Terbaru</h4>
                              </div>
                            </div>
                            <div class="mt-3">
                              @forelse ($user->sortByDesc('created_at')->take(5) as $item)
                              <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                <div class="d-flex">
                                  @if ($item->cv)
                                  <img class="img-sm rounded-10" src="{{asset('photo/' . $item->cv->photo)}}" alt="profile" style="object-fit: cover">    
                                  @else    
                                  <img class="img-sm rounded-10" src="/template1/images/faces/face1.jpg" alt="profile">
                                  @endif
                                  <div class="wrapper ms-3">
                                    <p class="ms-1 mb-1 fw-bold">{{$item->name}}</p>
                                    <small class="text-muted mb-0">{{$item->role}}</small>
                                  </div>
                                </div>
                                <div class="text-muted text-small">
                                  {{$item->created_at->diffForHumans()}}
                                </div>
                              </div>
                              @empty
                                <h3>Data User Kosong</h3>
                              @endforelse
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
