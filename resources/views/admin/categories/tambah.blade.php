@extends('admin.master')

@section('title')
Tambah Categories
@endsection



@section('content')  
    <div class="row" style="margin-top: 2rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Masukkan Data Categories yang Ingin Ditambahkan</h4>
            <form class="forms-sample" action="/categories" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan nama kategori">
              </div>
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="10" style="height: 100px" placeholder="Masukkan deskripsi kategori"></textarea>
              </div>
              @error('description')
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
