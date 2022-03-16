@extends('admin.tag.base')
@section('tag')
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">{{$tag->id}}</th>
    </thead>
    <tbody>  
        <tr>
          <th scope="row">title</th>
          <td>{{$tag->title}}</td>
        </tr>
    </tbody>
  </table>
  </div>
  <div class="row">
    <table class="table table-hover"> 
          <td>
            <a href="{{route('admin.tags.edit', $tag->id)}}" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="{{route('admin.tags.delete', $tag->id)}}" method="POST">
              @method("DELETE")
              @csrf
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>
      
</section>

@endsection