@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">see users</div>
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <tr>
        <td>User</td>
        <td>Users Email</td>
        @if($user->level_id == 2)
          <td>level</td>
        @elseif($user->level_id == 1)
          <td>Action</td>
        @endif

      </tr>
      @foreach($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              @if($user->level_id == 1)
                  <td>
                  @if($user->level_id == 2)
                    <a href="{{route('edit_user',['id' => $user->id])}}" class="btn btn-primary">Add to admin</a>
                  @elseif($user->level_id == 1)
                    <a href="{{route('edit_user',['id' => $user->id])}}" class="btn btn-primary">Add to user</a>
                  @endif
                    <a href="{{route('delete_user',['id' => $user->id])}}" class="btn btn-primary">Delete</a>
                </td>
              @else
              <td>
              @if($user->level_id == 2)
                  <h5>user</h5>
              @elseif($user->level_id == 1)
                <h5>admin</5>
              @endif
              @endif
            </tr>
      @endforeach
    </table>

  </div>
</div>
@stop
