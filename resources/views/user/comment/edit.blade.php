@extends('user.layouts.main')
@section('content')


<section class="content">
  <form action="{{route('user.comments.update', $comment->id)}}" method="POST">
    @method('PATCH')
    @csrf
      <label>Comment</label>
      <input type="text" class="form-control w-50" name="comment" placeholder="Enter title" value="{{$comment->comment}}">
      <button type="submit" class="btn btn-primary">Update</button>

  </form>

</section>

@endsection
