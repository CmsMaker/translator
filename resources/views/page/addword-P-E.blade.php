@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">add word to dictionary English to persian</div>
  <div class="panel-body">
     <div style="height:40px;"></div>
    <form class="form-inline" method="post" action="{{route('add_word')}}">
        <div class="form-group">
          <input type="text" class="col-md-offset-1 form-control"  placeholder="Persian">
        </div>
        <div class="form-group">
          <input type="text" class="col-md-offset-2 form-control" placeholder="English">
        </div>
        <button type="submit" class="col-md-offset-1 btn btn-primary">Add word</button>
      </form>
      <div style="height:40px;"></div>
  </div>
</div>
@stop
