@extends('admin.master')

@section('title')
Tambah Jobs
@endsection

@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  const form = document.querySelector('form');
  
  form.addEventListener('submit', function (event) {
    event.preventDefault();
    Swal.fire({
      title: 'Good job!',
      text: 'You clicked the button!',
      icon: 'success',
      confirmButtonText: 'Aww yiss!',
    }).then((result) => {
      console.log('Form berhasil dikirim');
    });
  });
</script>
@endpush

@section('content')  
    <div class="row" style="margin-top: 2rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Masukkan Data Jobs yang Ingin Ditambahkan</h4>
            <form class="forms-sample" action="/jobs" method="post">
              @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan judul pekerjaan">
              </div>
              @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="10" placeholder="Masukkan deskripsi pekerjaan" style="height: 100px"></textarea>
              </div>
              @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="requirements">Requirement</label>
                <textarea class="form-control @error('requirements') is-invalid @enderror" name="requirements" id="requirements" rows="10" placeholder="Masukkan requirement pekerjaan" style="height: 100px"></textarea>
              </div>
              @error('requirements')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="location" placeholder="Masukkan lokasi pekerjaan">
              </div>
              @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="close_date">Close Date</label>
                <input type="date" name="close_date" class="form-control @error('close_date') is-invalid @enderror" id="close_date" placeholder="Masukkan deadline lamaran">
              </div>
              @error('close_date')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="form-group">
                <label for="categories">Categories</label>
                <select name="categories_id" class="form-control @error('categories') is-invalid @enderror" id="categories">
                  <option>--Pilih Kategori--</option>
                  @forelse ($categories as $key => $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
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
