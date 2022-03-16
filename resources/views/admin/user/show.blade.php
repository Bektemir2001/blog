@extends('admin.user.base')
@section('user')
    

<section class="content">
  <div class="row">
  <table class="table table-hover text-nowrap">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">{{$user->id}}</th>
    </thead>
    <tbody>  
        <tr>
          <th scope="row">name</th>
          <td>{{$user->name}}</td>
        </tr>
    </tbody>
    <tbody>  
      <tr>
        <th scope="row">role</th>
        <td>{{$role}}</td>
      </tr>
  </tbody>
    <tbody>  
      <tr>
        <th scope="row">password</th>
        <td>{{$user->password}}</td>
      </tr>
  </tbody>
  </table>
  </div>
  <div class="row">
    <table class="table table-hover"> 
          <td>
            <a href="{{route('admin.users.edit', $user->id)}}" type="button" class="btn btn-block btn-primary btn-sm">Update</a>
          </td>
          <td>
            <form action="{{route('admin.users.delete', $user->id)}}" method="POST">
              @method("DELETE")
              @csrf
              <button type="submit" class="btn btn-block btn-danger btn-sm">Delete</button>
            </form>
          </td>
    </table>
  </div>
      
</section>

@endsection