@extends('default.home')

  @section('content')
  <div style="height:120px;"></div>
    <div class="row">
      <div class="col-md-3">
        <a href="{{route('lan',['lan'=> 'en'])}}" class="col-md-offset-6 btn btn-primary">English</a>
        <a href="{{route('lan',['lan'=> 'pe'])}}" class="btn btn-primary">Persian</a>
      </div>
      <div class="col-md-2" ></div>
      <div class="col-md-7">

      </div>
    </div>
    <div class="row">
      <div style="height:20px;"></div>
      <form class="" action="{{route('search')}}" method="post">
        {{ csrf_field() }}
        <div class="col-md-offset-1 col-md-4">
            <textarea name="word" id="word" rows="6" cols="50" class="align-left">{{$word}}</textarea>

        </div>
        <div class="col-md-2">
          <input type="hidden" name="lan" value="{{$lan}}"/>
          <button type="submit" class="col-md-offset-2 btn btn-primary">
              @if($lan == 'pe')
                Translate to english
              @elseif($lan == 'en')
                Translate to persian
              @endif
          </button>
        </div>
        </form>
        <div class="col-md-4">
          <textarea rows="6" cols="50" >{{$search}}</textarea>
        </div>

    </div>
    <div class="row"></div>
  @stop
