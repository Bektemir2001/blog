@extends('admin.category.base')
@section('category')
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">{{$category->id}}</th>
    </thead>
    <tbody>  
        <tr>
          <th scope="row">title</th>
          <td>{{$category->title}}</td>
        </tr>
    </tbody>
  </table>
  </div>
  <div class="row">
    <table class="table table-hover"> 
          <td>
            <a href="{{route('admin.categories.edit', $category->id)}}" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="{{route('admin.categories.delete', $category->id)}}" method="POST">
              @method("DELETE")
              @csrf
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>
      
</section>

@endsection