@extends('admin.master')

@section('title')
Edit Jobs Id = {{$jobs->id}}
@endsection

@section('content')  
    <div class="row" style="margin-top: 2rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Data Jobs yang Diinginkan</h4>
            <form class="forms-sample" action="/jobs/{{$jobs->id}}" method="post">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$jobs->title}}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan judul pekerjaan">
              </div>
              @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="10" placeholder="Masukkan deskripsi pekerjaan" style="height: 100px">{{$jobs->description}}</textarea>
              </div>
              @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="requirements">Requirement</label>
                <textarea class="form-control @error('requirements') is-invalid @enderror" name="requirements" id="requirements" rows="10" placeholder="Masukkan requirement pekerjaan" style="height: 100px">{{$jobs->requirements}}</textarea>
              </div>
              @error('requirements')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" value="{{$jobs->location}}" class="form-control @error('location') is-invalid @enderror" id="location" placeholder="Masukkan lokasi pekerjaan">
              </div>
              @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="close_date">Close Date</label>
                <input type="date" name="close_date" value="{{$jobs->close_date}}" class="form-control @error('close_date') is-invalid @enderror" id="close_date" placeholder="Masukkan deadline lamaran">
              </div>
              @error('close_date')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="categories">Categories</label>
                <select name="categories_id" class="form-control @error('categories') is-invalid @enderror" id="categories">
                  <option>--Pilih Kategori--</option>
                  @forelse ($categories as $item)
                    @if ($item->id === $jobs->categories_id)
                      <option value="{{$item->id}}" selected>{{$item->name}}</option>    
                    @else
                      <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                  @empty
                    <option>Tidak ada kategori</option>
                  @endforelse
                </select>
              </div>
              @error('categories')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection
