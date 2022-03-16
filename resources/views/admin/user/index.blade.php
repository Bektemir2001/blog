@extends('admin.user.base')
@section('user')
    

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
      @foreach ($users as $user)   
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td><a href="{{route('admin.users.show', $user->id)}}"><i class="fas fa-eye"></i></a></td>
          <td><a href="{{route('admin.users.edit', $user->id)}}" class="text-success"><i class="fas fa-pen"></i></a></td>
          <td>
            <form action="{{route('admin.users.delete', $user->id)}}" method="POST">
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