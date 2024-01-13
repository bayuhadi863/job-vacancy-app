@extends('pelamar.master')

@section('content')
  <div class="container py-4">
    <h2 class="my-3">Profil/CV</h2>
    @if ($cvs)
    <div class="row">
      <div class="col-2">
        <img src="{{asset('photo/' . $cvs->photo)}}" alt="image" style="height: 200px; margin-bottom: 2rem">
      </div>
      <div class="col-10">
      </div>
    </div>    
    <div class="shadow-none p-3 mb-5 bg-light rounded">
    <div class="row">
      <div class="col-2">
        <p>Name</p>
      </div>
      <div class="col-10">
        <p>: {{$user->name}}</p>
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
    </div>
    <a href="/cvs/{{$cvs->id}}/edit" type="button" class="btn py-3 px-2 rounded">Edit CV</a>
    @else
      <p>Anda belum menambahkan CV</p>
      <a href="/cvs/create" type="button" class="btn py-3 px-2 rounded">Tambah CV</a>
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
              <div class="shadow-none p-3 mb-5 bg-light rounded">
              <p>
                <b>Tingkat</b> {{$item->tingkat}}<br>
                <b>Institusi</b> {{$item->institusi}}<br>
                <b>Jurusan</b> {{$item->jurusan}}<br>
                <b>Tahun Masuk</b> {{$item->th_masuk}}<br>
                <b>Tahun Lulus</b> {{$item->th_lulus}}</p>
              </div>
            </div>
            <div class="col-2">
              <div class="row" style="gap: 5px">
              <a href="/educations/{{$item->id}}/edit" type="button" class="btn py-3 px-2 rounded" >Edit</a>
              <form action="/educations/{{$item->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn py-3 px-2 rounded">Delete</button>
              </form>
              </div>
            </div>
          </div> 
          @empty
          <p>Anda belum menambahkan educations</p>
          @endforelse
        </div>
        @else
        <p>Anda belum menambahkan educations</p>
        @endif
    </div>
    <a href="/educations/create" type="button" class="btn py-3 px-2 rounded">Tambah Educations</a>
  

    <div class="row mt-3">
      <div class="col-2">
        <p>Experiences</p>
      </div>
      @if ($cvs)
      <div class="col-10">
          @forelse ($cvs->experiences as $key => $item)
          <div class="row">
            <div class="col-10">              
              <div class="shadow-none p-3 mb-5 bg-light rounded">
              <p>
                <b>Perusahaan</b> {{$item->perusahaan}}<br> 
                <b>Posisi</b> {{$item->posisi}}<br>
                <b>Tanggal Masuk</b> {{$item->tgl_masuk}}<br>
                <b>Tanggal Keluar</b> {{$item->tgl_keluar}}<br>
                <b>Job Desc</b> {{$item->jobdesc}}</p>
              </div>
            </div>
            <div class="col-2">
              <div class="row" style="gap: 5px">
              <a href="/experiences/{{$item->id}}/edit" type="button" class="btn py-3 px-2 rounded" >Edit</a>
              <form action="/experiences/{{$item->id}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn py-3 px-2 rounded">Delete</button>
              </form>
            </div>
            </div>
          </div> 
          @empty
          <p>Anda belum menambahkan experiences</p>
          @endforelse
        </div>
        @else
        <p>Anda belum menambahkan experiences</p>
        @endif
    </div>
    <a href="/experiences/create" type="button" class="btn py-3 px-2 rounded">Tambah Experiences</a>
  </div>
  </div>
@endsection