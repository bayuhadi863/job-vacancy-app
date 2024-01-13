@extends('pelamar.master')

@section('content')
<div class="container">
<div class="row" style="margin-top: 2rem">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Masukkan Data Experience Anda</h4>
          <form class="forms-sample" action="/experiences" method="post">
            @csrf
            <div class="form-group">
              <label for="perusahaan">Perusahaan</label>
              <input type="text" name="perusahaan" class="form-control @error('perusahaan') is-invalid @enderror" id="perusahaan" placeholder="Masukkan Perusahaan">
            </div>
            @error('perusahaan')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="posisi">Posisi</label>
              <input type="text" name="posisi" class="form-control @error('posisi') is-invalid @enderror" id="posisi" placeholder="Masukkan Posisi">
            </div>
            @error('posisi')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="tgl_masuk">Tanggal Masuk</label>
                <input type="date" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" placeholder="Masukkan Tanggal Masuk">
              </div>
            @error('tgl_masuk')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
              <label for="tgl_keluar">Tanggal Keluar</label>
              <input type="date" name="tgl_keluar" class="form-control @error('tgl_keluar') is-invalid @enderror" id="tgl_keluar" placeholder="Masukkan Tanggal Keluar">
            </div>
            @error('tgl_keluar')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="jobdesc">Job Desc</label>
                <textarea name="jobdesc" class="form-control @error('jobdesc') is-invalid @enderror" id="jobdesc" placeholder="Masukkan Job Desc"></textarea>
              </div>
            @error('jobdesc')
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