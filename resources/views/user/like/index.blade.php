@extends('user.layouts.main')
@section('content')
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
        @foreach ($posts as $post)   
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td><a href="#"><i class="fas fa-eye"></i></a></td>
            <td><a href="#" class="text-success"><i class="fas fa-pen"></i></a></td>
            <td>
              <form action="{{route('user.likes.delete', $post->id)}}" method="POST">
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
@endsection