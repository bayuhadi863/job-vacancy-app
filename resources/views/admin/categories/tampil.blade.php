@extends('admin.master')

@section('title')
Tabel Categories
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
<a href="/categories/create" class="btn btn-primary p-2 mt-2">Tambah Data</a>  
    <div class="row" style="margin-top: 2rem">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <table id="myTable" class="display">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($categories as $key => $item)
                  <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{Str::limit($item->description, 50)}}</td>
                      <td>{{$item->created_at}}</td>
                      <td>{{$item->updated_at}}</td>
                      <td>
                        <a href="/categories/{{$item->id}}" type="button" class="btn btn-info py-2 my-1">Detail</a>
                        <a href="/categories/{{$item->id}}/edit" type="button" class="btn btn-warning py-2 my-1">Edit</a>
                        <form action="/categories/{{$item->id}}" method="post">
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
