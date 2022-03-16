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
      @foreach ($tags as $tag)   
        <tr>
          <th scope="row">{{$tag->id}}</th>
          <td>{{$tag->title}}</td>
          <td><a href="{{route('admin.tags.show', $tag->id)}}"><i class="fas fa-eye"></i></a></td>
          <td><a href="{{route('admin.tags.edit', $tag->id)}}" class="text-success"><i class="fas fa-pen"></i></a></td>
          <td>
            <form action="{{route('admin.tags.delete', $tag->id)}}" method="POST">
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