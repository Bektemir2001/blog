@extends('admin.user.base')
@section('user')
    

<section class="content">
  <form action="{{route('admin.users.store')}}" method="POST" class="w-25">
    @csrf
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
      <div class="text-danger">
        @error('name')
            {{$message}}
        @enderror
      </div>

      <label>Email</label>
      <input type="text" class="form-control" name="email" placeholder="Enter email">

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
            {{old('role') == $role ? ' selected':''}}
            value="{{$id}}">{{$role}}</option>
          @endforeach
        </select>
      </div>
      
      <div class="pt-3">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      
      

  </form>
      
</section>

@endsection