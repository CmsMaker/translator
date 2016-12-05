@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">کلمات دیکشنری</div>
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <tr>
        <td>انگلیسی</td>
        @if($user->level_id == 1)
          <td>   </td>
        @endif
      </tr>
      @foreach($words as $word)
      <tr>
        <td>{{$word->en_word}}</td>
        @if($user->level_id == 1)
            <td>
              <a href="{{route('edit_word',['id' => $word->id])}}" class="btn btn-primary">Edit</a>
              <a href="{{route('delete_word',['id' => $word->id])}}" class="btn btn-primary">Delete</a>
          </td>
        @endif
      </tr>
      @endforeach
    </table>

  </div>
</div>
@stop
