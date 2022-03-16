@extends('admin.tag.base')
@section('tag')
    

<section class="content">
  <form action="{{route('admin.tags.update', $tag->id)}}" method="POST" class="w-25">
    @method('PATCH')
    @csrf
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{$tag->title}}">

      <div class="pt-3">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      @error('title')
          {{$message}}
      @enderror

  </form>
      
</section>

@endsection