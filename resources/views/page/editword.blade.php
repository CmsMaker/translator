@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">ویرایش کلمه</div>
  <div class="panel-body">
     <div style="height:40px;"></div>
    <form class="form-horizontal col-md-offset-1 col-md-10" method="post" action="{{route('edit_word',['id' => $word->id])}}">
        {{ csrf_field() }}
        <div class="form-group">
          <input type="text" class="form-control"
          name="english" placeholder="{{$word->en_word}}" value="{{$word->en_word}}">

        </div>
        <div class="form-group">
          <textarea  id="persian" name="persian" class="form-control" placeholder="{{$word->pe_word}}" value="{{$word->pe_word}}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ویرایش</button>
      </form>
      <div style="height:40px;"></div>
  </div>
</div>
<script src="/js/ckeditor/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'persian' );
</script>
@stop
