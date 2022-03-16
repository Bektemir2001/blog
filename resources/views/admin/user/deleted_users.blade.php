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
      @foreach ($deleted_users as $user)   
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>
            <a href="{{route('admin.users.restore', $user->id)}}" class="btn btn-block btn-success btn-sm">
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