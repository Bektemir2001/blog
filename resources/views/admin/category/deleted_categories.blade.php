@extends('admin.category.base')
@section('category')
    

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
      @foreach ($deleted_categories as $category)   
        <tr>
          <th scope="row">{{$category->id}}</th>
          <td>{{$category->title}}</td>
          <td>
            <a href="{{route('admin.categories.restore', $category->id)}}" class="btn btn-block btn-success btn-sm">
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