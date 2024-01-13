@extends('pelamar.master')

@section('content')
<div class="container py-3">
  <h2>Your Apllication History</h2>
  @forelse ($applications as $item)
    <!-- single-job-content -->
    <div class="single-job-items mb-30">
        <div class="job-items">
            <div class="job-tittle job-tittle2">    
                <h4>{{$item->jobs->title}}</h4>
                <ul>
                  <li><i class="fas fa-map-marker-alt"></i>{{$item->jobs->location}}</li>
                </ul>
            </div>
        </div>
        <div class="items-link items-link2 f-right">
          <span>{{$item->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @empty
      <p>Application Anda Tidak Ada</p>
    @endforelse
</div>
@endsection