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
      @foreach ($posts as $post)   
        <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td><a href="{{route('admin.posts.show', $post->id)}}"><i class="fas fa-eye"></i></a></td>
          <td><a href="{{route('admin.posts.edit', $post->id)}}" class="text-success"><i class="fas fa-pen"></i></a></td>
          <td>
            <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
              @method('DELETE')
              @csrf
              <button title="submit" class="border-0 bg-transparent">
                  <i title="submit" class="fas fa-trash text-danger" role="button"></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
      
</section>

@endsection