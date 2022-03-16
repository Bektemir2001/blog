@extends('admin.tag.base')
@section('tag')
    

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
      @foreach ($deleted_tags as $tag)   
        <tr>
          <th scope="row">{{$tag->id}}</th>
          <td>{{$tag->title}}</td>
          <td>
            <a href="{{route('admin.tags.restore', $tag->id)}}" class="btn btn-block btn-success btn-sm">
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