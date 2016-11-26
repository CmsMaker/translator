@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">see users</div>
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <tr>
        <td>User</td>
        <td>Users Email</td>
        <td>Action</td>
      </tr>
      @foreach($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
              @if($user->level_id == 2)
                <a href="{{route('edit_user',['id' => $user->id])}}" class="btn btn-primary">Add to admin</a>
              @elseif($user->level_id == 1)
                <a href="{{route('edit_user',['id' => $user->id])}}" class="btn btn-primary">Add to user</a>
              @endif
                <a href="{{route('delete_user',['id' => $user->id])}}" class="btn btn-primary">Delete</a>
            </td>
            </tr>
      @endforeach
    </table>

  </div>
</div>
@stop
