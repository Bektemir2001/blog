@extends('user.layouts.main')
@section('content')


<section class="content">
  <label>Preview image</label>
  <div class="mb-2">
    <img class="w-25" src="{{url('storage/', $post->preview_image)}}" alt="preview_image">
  </div>
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">{{$post->id}}</th>
    </thead>
    <tbody>
        <tr>
          <th scope="row">title</th>
          <td>{{$post->title}}</td>
        </tr>
    </tbody>
    <tbody>
      <tr>
        <th scope="row">content</th>
        <td>{{$post->content}}</td>
      </tr>
  </tbody>
  <tbody>
    <tr>
      <th scope="row">category</th>
      <td>{{$category->title}}</td>
    </tr>
</tbody>
  </table>
  </div>
  <label>Main image</label>
  <div>
    <img class="w-50" src="{{url('storage/', $post->main_image)}}" alt="preview_image">
  </div>
  <div>
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th scope="col">comment</th>
            <th scope="col">{{$comment->comment}}</th>
        </thead>
    </table>
  </div>
  <div class="row">
    <table class="table table-hover">
          <td>
            <a href="{{route('user.comments.edit', $post->id)}}" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="{{route('user.comments.delete', $post->id)}}" method="POST">
              @method("DELETE")
              @csrf
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>

</section>

@endsection
