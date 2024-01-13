@extends('admin.master')

@section('title')
Edit Data {{$user->name}}
@endsection

@section('content')
<div class="col-12  stretch-card">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/user/{{$user->id}}">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Roles') }}</label>

                    <div class="col-md-6">
                        <Select name="role" id="role" class="form-control" autocomplete="role">
                            @if ($user->role == 'admin')
                            <option value="admin" active selected>Admin</option>
                            <option value="pelamar" >User</option>
                            @elseif ($user->role == 'pelamar')
                            <option value="admin" >Admin</option>
                            <option value="pelamar" selected>User</option>
                            @else
                            <option value="" disabled selected>Role Belum Dipilih</option>
                            <option value="admin" >Admin</option>
                            <option value="pelamar" >User</option>
                            @endif
                        </Select>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection