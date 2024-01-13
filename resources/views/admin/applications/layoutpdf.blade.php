<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header container-fluid">
                <h3 class="w-75 p-3">Profile/CV</h3>
          </div>
        <div class="card-body">
    @if ($cvs)
    <div class="row">
        <div class="col-2">
            <img src="{{asset('photo/' . $cvs->photo)}}" alt="image" style="height: 200px; margin-bottom: 2rem">
        </div>
        <div class="col-10">
        </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Name</p>
      </div>
      <div class="col-10">
        <p>: {{$cvs->user->name}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Gender</p>
      </div>
      <div class="col-10">
        <p>: {{$cvs->gender}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Birth Place</p>
      </div>
      <div class="col-10">
        <p>: {{$cvs->birthplace}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Birth Date</p>
      </div>
      <div class="col-10">
        <p>: {{$cvs->birthdate}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Address</p>
      </div>
      <div class="col-10">
        <p>: {{$cvs->address}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-2">
        <p>Telephone Number</p>
      </div>
      <div class="col-10">
        <p>: {{$cvs->telephone}}</p>
      </div>
    </div>
    @else
      <p>Pelamar belum melengkapi CV</p>
    @endif

    <div class="row mt-3">
      <div class="col-2">
        <p>Educations</p>
      </div>
      @if ($cvs)
      <div class="col-10">
          @forelse ($cvs->educations as $key => $item)
          <div class="row">
            <div class="d-none d-lg-block col-10">
              <p>: {{$key + 1}}.
                <b>Tingkat</b> {{$item->tingkat}}<br>
                <b>Institusi</b> {{$item->institusi}}<br>
                <b>Jurusan</b> {{$item->jurusan}}<br>
                <b>Tahun Masuk</b> {{$item->th_masuk}}<br>
                <b>Tahun Lulus</b> {{$item->th_lulus}}</p>
            </div>
          </div> 
          @empty
          <div class="alert alert-info" role="alert">
            <p>Pelamar belum menambahkan educations</p>
          </div>
          @endforelse
        </div>
        @else
        <div class="alert alert-info" role="alert">
            <p>Pelamar belum menambahkan educations</p>
        </div>
        @endif
    </div>

    <div class="row mt-3">
      <div class="col-2">
        <p>Experiences</p>
      </div>
      @if ($cvs)
      <div class="col-10">
          @forelse ($cvs->experiences as $key => $item)
          <div class="row">
            <div class="col-10">
              <p>: {{$key + 1}}.
                <b>Perusahaan</b> {{$item->perusahaan}}<br> 
                <b>Posisi</b> {{$item->posisi}}<br>
                <b>Tanggal Masuk</b> {{$item->tgl_masuk}}<br>
                <b>Tanggal Keluar</b> {{$item->tgl_keluar}}<br>
                <b>Job Desc</b> {{$item->jobdesc}}</p>
            </div>
          </div> 
          @empty
          <div class="alert alert-info" role="alert">
            <p>Pelamar belum menambahkan experiences</p>
          </div>
          @endforelse
        </div>
        @else
        <div class="alert alert-info" role="alert">
            <p>Pelamar belum menambahkan experiences</p>
        </div>
        @endif
    </div>
  </div>
</div>
</body>