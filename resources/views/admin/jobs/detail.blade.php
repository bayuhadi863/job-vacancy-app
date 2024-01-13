@extends('admin.master')

@section('title')
Detail Jobs
@endsection

@section('content')  
    <div class="row" style="margin-top: 2rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Id:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$jobs->id}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Title:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$jobs->title}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Description:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{!! nl2br(e($jobs->description)) !!}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Requirements:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{!! nl2br(e($jobs->requirements)) !!}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Location:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$jobs->location}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Close Date:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$jobs->close_date}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Categories:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$categories->name}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Created at:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$jobs->created_at}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Updated at:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$jobs->updated_at}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1">
                <a href="/jobs/{{$jobs->id}}/edit" type="button" class="btn btn-warning py-2">Edit</a>
              </div>
              <div class="col-1">
                <form action="/jobs/{{$jobs->id}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger py-2 ">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
