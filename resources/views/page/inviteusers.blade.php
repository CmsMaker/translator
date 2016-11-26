@extends('page.home')
  @section('left-content')

<div class="panel panel-info">

  <div class="panel-heading">Invite User</div>
  <div class="panel-body">
     <div style="height:40px;"></div>
    <form class="form-inline" action="{{route('invite_user')}}" method="post">
      {{ csrf_field() }}
        <div class="form-group">
          <input type="email" name="email" class="col-md-offset-2 form-control" placeholder="Email">
        </div>
        <button type="submit" class="col-md-offset-1 btn btn-primary">Add word</button>
      </form>
      <div style="height:40px;"></div>
  </div>
</div>
@stop
