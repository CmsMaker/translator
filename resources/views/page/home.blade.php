
  @extends('default.home')

    @section('content')
    <div style="height:10px;"></div>
    <div class="row text-center">
        <h1>
            Hi {{$user->name}}
        </h1>
    </div>
    <div style="height:40px;"></div>
    <div class="row">
      <div class="col-md-offset-1 col-md-7 text-left">
        @yield('left-content')
      </div>
      <div class="col-md-4">
        <div class="list-group">
          <a href="{{route('see_dictionary')}}" class="list-group-item list-group-item-info">see dictionary</a>
          <a href="{{route('add_word')}}" class="list-group-item list-group-item-info">add word to dictionary</a>
          <a href="{{route('see_user')}}" class="list-group-item list-group-item-info">see users</a>
          @if($user->level_id == 1)
            <a href="{{route('see_admin')}}" class="list-group-item list-group-item-info">see admins</a>
            <a href="{{route('invite_user')}}" class="list-group-item list-group-item-info">Invite Users</a>
          @endif
          <a href="{{route('report')}}" class="list-group-item list-group-item-info">Report</a>
        </div>
      </div>
    </div>

    @stop
