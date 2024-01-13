@extends('pelamar.master')

@section('content')
<div class="container">
<div class="row" style="margin-top: 2rem">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Masukkan Data Education yang Ingin Diedit</h4>
          <form class="forms-sample" action="/educations/{{$educations->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="tingkat">Tingkat</label>
              <input type="text" name="tingkat" value="{{$educations->tingkat}}" class="form-control @error('tingkat') is-invalid @enderror" id="tingkat" placeholder="Masukkan Tingkat">
            </div>
            @error('tingkat')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="institusi">Institusi</label>
              <input type="text" name="institusi" value="{{$educations->institusi}}" class="form-control @error('institusi') is-invalid @enderror" id="institusi" placeholder="Masukkan Institusi">
            </div>
            @error('institusi')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" value="{{$educations->jurusan}}" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan">
              </div>
            @error('jurusan')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="th_masuk">Tahun Masuk</label>
              <input type="number" name="th_masuk" value="{{$educations->th_masuk}}" class="form-control @error('th_masuk') is-invalid @enderror" id="th_masuk" placeholder="Masukkan Tahun Masuk">
            </div>
            @error('th_masuk')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="th_lulus">Tahun Lulus</label>
                <input type="number" name="th_lulus" value="{{$educations->th_lulus}}" class="form-control @error('th_lulus') is-invalid @enderror" id="th_lulus" placeholder="Masukkan Tahun Lulus">
              </div>
            @error('th_lulus')
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