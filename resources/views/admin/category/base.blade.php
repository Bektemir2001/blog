@extends('admin.layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.categories.create')}}">Create Category</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.categories.deleted_categories')}}">Deleted Categories</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @yield('category')
@endsection