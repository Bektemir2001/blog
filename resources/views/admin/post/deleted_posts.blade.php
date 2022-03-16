@extends('admin.post.base')
@section('post')
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th colspan="3" class="text-center">Actions</th>
    </thead>
    <tbody>
      @foreach ($deleted_posts as $post)   
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td>
            <a href="{{route('admin.posts.restore', $post->id)}}" class="btn btn-block btn-success btn-sm">
              Restor
            </a>
        </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      
</section>

@endsection