@extends('default.home')

  @section('content')

  <div style="height:120px;"></div>
  <div class="row">
    <div class="col-md-offset-1 col-md-4">
      <div class="row">
        <a href="{{route('lan',['lan'=> 'en'])}}" class="col-md-offset-1 btn btn-primary">English</a>
        <a href="{{route('lan',['lan'=> 'pe'])}}" class="btn btn-primary">Persian</a>
      </div>
      <div class="row">
        <div style="height:20px;"></div>
            <textarea name="word" id="word" rows="6" cols="50" class="align-left">{{$word}</textarea>
      </div>

    </div>
    <div class="col-md-2">
      <div style="height:90px;"></div>
      <button type="submit" class="col-md-offset-1 btn btn-primary">
              @if($lan == 'pe')
                Translate to english
              @elseif($lan == 'en')
                Translate to persian
              @endif
          </button>
    </div>
    <div class="col-md-5">
      <div style="height:50px;"></div>
        <div class="row">
          <div class="word">
            {!!$search!!}
          </div>
        </div>
    </div>

    </div>
  @stop
