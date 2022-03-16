@extends('admin.category.base')
@section('category')
    

<section class="content">
  <form action="{{route('admin.categories.store')}}" method="POST" class="w-25">
    @csrf
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter title">

      <div class="pt-3">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      @error('title')
          {{$message}}
      @enderror

  </form>
      
</section>

@endsection