@extends('admin.master')

@section('title')
User Management
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('#UserTable').dataTable( {
} );
</script>
@endpush

{{-- @push('styles')
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush --}}

@section('content')
<a href="/user/create" class="btn btn-primary p-2 mt-2">Tambah User</a>  
<div class="row" style="margin-top: 2rem">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#admin">Admin</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane container active" id="user">
                        <table id="UserTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <form action="/user/{{$item->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/user/{{$item->id}}" type="button" class="btn btn-info py-2 my-1">Detail</a>
                                            <a href="/user/{{$item->id}}/edit" type="button" class="btn btn-warning py-2 my-1">Edit</a>
                                            <button type="submit" class="btn btn-danger py-2 my-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach                    
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane container fade" id="admin">
                        <table id="UserTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Namaa</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($admin as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <form action="/user/{{$item->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/user/{{$item->id}}/edit" type="button" class="btn btn-warning py-2 my-1">Edit</a>
                                            <button type="submit" class="btn btn-danger py-2 my-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
