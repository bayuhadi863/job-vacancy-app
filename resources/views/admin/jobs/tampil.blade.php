@extends('admin.master')

@section('title')
Tabel Jobs
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal({
  title: "Berhasil!",
  text: "Memperbarui Data!",
  icon: "success",
  button: "Oke!",
});
  let table = new DataTable('#myTable');

</script>
@endpush

@push('styles')
<link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush

@section('content')
<a href="/jobs/create" class="btn btn-primary p-2 mt-2">Tambah Data</a>  
    <div class="row" style="margin-top: 2rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <table id="myTable" class="display">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Dequirements</th>
                      <th>location</th>
                      <th>Close Date</th>
                      <th>Categories Id</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($jobs as $key => $item)
                  <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$item->id}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{Str::limit($item->description, 30)}}</td>
                      <td>{{Str::limit($item->requirements, 30)}}</td>
                      <td>{{$item->location}}</td>
                      <td>{{$item->close_date}}</td>
                      <td>{{$item->categories_id}}</td>
                      <td>
                        <a href="/jobs/{{$item->id}}" type="button" class="btn btn-info py-2 my-1">Detail</a>
                        <a href="/jobs/{{$item->id}}/edit" type="button" class="btn btn-warning py-2 my-1">Edit</a>
                        <form action="/jobs/{{$item->id}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger py-2 my-1">Delete</button>
                        </form>
                      </td>
                  </tr>
                @empty
                  <h2>Data Categories Kosong</h2>
                @endforelse
                
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>

@endsection
