@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">add word to dictionary persian to English</div>
  <div class="panel-body">
     <div style="height:40px;"></div>
    <form class="form-inline" method="post" action="{{route('add_word')}}">
        {{ csrf_field() }}
        <div class="form-group">
          <input id="english" type="text" name="english" class="col-md-offset-1 form-control"  placeholder="English" value="{{ old('english') }}" >
        </div>
        <div class="form-group">
          <input type="text" id="persian" name="persian" class="col-md-offset-2 form-control" placeholder="Persian" value="{{ old('persian') }}" >
        </div>
        <button type="submit" class="col-md-offset-1 btn btn-primary">Add word</button>
      </form>
      <div style="height:40px;"></div>
  </div>
</div>
@stop
