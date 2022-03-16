@extends('admin.layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Post</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.posts.create')}}">Create Post</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.posts.deleted_posts')}}">Deleted Posts</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @yield('post')
@endsection