@extends('admin.layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tag</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.tags.create')}}">Create Tag</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.tags.deleted_tags')}}">Deleted Tags</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.tags.index')}}">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @yield('tag')
@endsection