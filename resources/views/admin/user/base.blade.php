@extends('admin.layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.users.create')}}">Create User</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.users.deleted_users')}}">Deleted Users</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @yield('user')
@endsection