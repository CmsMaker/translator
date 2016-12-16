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
              <a href="{{route('edit_word',['id' => $word->id])}}" class="btn btn-primary"
                data-toggle="tooltip" data-placement="bottom" title="ویرایش">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>


              <a href="{{route('delete_word',['id' => $word->id])}}" class="btn btn-primary"
                data-toggle="tooltip" data-placement="bottom" title="حذف">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
          </td>
        @endif
      </tr>
      @endforeach
    </table>

  </div>
</div>
@stop
