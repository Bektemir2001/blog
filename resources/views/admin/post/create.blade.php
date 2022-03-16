@extends('admin.post.base')
@section('post')
    

<section class="content">
  <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <label>Title</label>
      <input type="text" class="form-control w-25" name="title" placeholder="Enter title" value="{{old('title')}}">

      <div class="text-danger">
        @error('title')
          {{$message}}
        @enderror
      </div>

      <label>Content</label>
      <textarea id="summernote" name="content">{{old('content')}}</textarea>

      <div class="text-danger">
        @error('content')
          {{$message}}
        @enderror
      </div>
      <label>Preview</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      
        <label>Main image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="main_image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
        <div class="form-group">
          <label>Categories</label>
          <select class="custom-select form-control-border" name="category_id">
            @foreach ($categories as $category)
              <option 
              {{old('category_id') == $category->id ? ' selected':''}}
              value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Tags</label>
          <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tag[]">
            @foreach ($tags as $tag)
              <option 
              {{is_array(old('tag')) && in_array($tag->id, old('tag')) ? ' selected':''}}
              value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

  </form>
      
</section>

@endsection