@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">edit word of dictionary</div>
  <div class="panel-body">
     <div style="height:40px;"></div>
    <form class="form-inline" method="post" action="{{route('edit_word',['id' => $word->id])}}">
        {{ csrf_field() }}
        <div class="form-group">
          <input type="text" class="col-md-offset-1 form-control"
          name="english" placeholder="{{$word->en_word}}" value="{{$word->en_word}}">

        </div>
        <div class="form-group">
          <input type="text" class="col-md-offset-2 form-control"
          name="persian" placeholder="{{$word->pe_word}}" value="{{$word->pe_word}}">

        </div>
        <button type="submit" class="col-md-offset-1 btn btn-primary">Edit</button>
      </form>
      <div style="height:40px;"></div>
  </div>
</div>
@stop
