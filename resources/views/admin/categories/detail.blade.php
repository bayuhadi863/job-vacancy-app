@extends('admin.master')

@section('title')
Detail Categories
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
                <p style="font-size: 16px">{{$categories->id}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Name:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$categories->name}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Description:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$categories->description}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Created at:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$categories->created_at}}</p>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-2">
                <p style="font-size: 16px"><b>Updated at:</b></p>
              </div>
              <div class="col-10">
                <p style="font-size: 16px">{{$categories->updated_at}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1">
                <a href="/categories/{{$categories->id}}/edit" type="button" class="btn btn-warning py-2">Edit</a>
              </div>
              <div class="col-1">
                <form action="/categories/{{$categories->id}}" method="post">
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
    <div class="row" style="margin-top: 1rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4>Jobs Kategori {{$categories->name}}</h4>
            <div class="row p-3 gap-3">
              @forelse ($categories->jobs as $item)
              <div class="col-12 col-md-3 rounded p-3" style="border: 1px solid grey">
                <h5>{{$item->title}}</h5>
                <p>{{$item->location}}</p>
              </div>
              @empty
                <p>Jobs Kategori {{$categories->name}} Tidak Ada</p>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
