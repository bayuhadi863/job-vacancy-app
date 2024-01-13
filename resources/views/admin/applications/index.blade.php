@extends('admin.master')

@section('title')
Data List Pelamar
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>
$('#UserTable').dataTable( {
} );
</script>
@endpush

@push('styles')
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="row" style="margin-top: 2rem">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table id="UserTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Job Apply</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($apply as $key => $item)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->jobs->title}}</td>
                            <td>
                                <form action="/apply/{{$item->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/apply/{{$item->id}}" type="button" class="btn btn-info py-2 my-1">Detail</a>
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

@endsection
