
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
        </div>
      </div>
    </div>

    @stop
