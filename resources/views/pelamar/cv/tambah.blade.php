@extends('pelamar.master')

@section('content')
<div class="container">
<div class="row" style="margin-top: 2rem">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Masukkan Data CV Anda</h4>
          <form class="forms-sample" action="/cvs" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="gender">Gender</label>
              <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender" placeholder="Masukkan Gender">
            </div>
            @error('gender')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="birthplace">Birth Place</label>
              <input type="text" name="birthplace" class="form-control @error('birthplace') is-invalid @enderror" id="birthplace" placeholder="Masukkan Birth Place">
            </div>
            @error('birthplace')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="birthdate">Birth Date</label>
                <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" placeholder="Masukkan Birth Date">
              </div>
            @error('birthdate')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Masukkan Address"></textarea>
              </div>
            @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="number" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Masukkan Nomor Telephone">
              </div>
            @error('telephone')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror            
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" id="photo" placeholder="Masukkan Photo">
              </div>
            @error('photo')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror                        
            <button type="submit" class="btn me-2">Submit</button>
            <button type="reset" class="btn">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection