@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">see dictionary English to persian</div>
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <tr>
        <td>English</td>
        <td>persian</td>
        @if($user->level_id == 1)
          <td>Action</td>
        @endif
      </tr>
      @foreach($words as $word)
      <tr>
        <td>{{$word->en_word}}</td>
        <td style="text-align:right;">{{$word->pe_word}}</td>
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
