
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
      <div class="col-md-offset-3 col-md-6 text-left">
        @yield('left-content')
      </div>

    </div>

    @stop
