@extends('admin.user.base')
@section('user')
    

<section class="content">
  <form action="{{route('admin.users.update', $user->id)}}" method="POST" class="w-25">
    @method('PATCH')
    @csrf
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}">
      <div class="text-danger">
        @error('name')
            {{$message}}
        @enderror
      </div>

      <label>Email</label>
      <input type="text" class="form-control" name="email" value="{{$user->email}}">
      <div class="text-danger">
        @error('email')
            {{$message}}
        @enderror
      </div>
      <div class="form-group">
        <label>Role</label>
        <select class="custom-select form-control-border" name="role">
          @foreach ($roles as $id => $role)
            <option 
            {{$id == $user->role ? ' selected':''}}
            value="{{$id}}">{{$role}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <input type="hidden" name="user_id" value="{{$user->id}}">
      </div>
      
      <div class="pt-3">
      <button type="submit" class="btn btn-primary">Update</button>
      </div>
      

  </form>
      
</section>

@endsection