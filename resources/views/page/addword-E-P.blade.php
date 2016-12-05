@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">اضافه کردن کلمه جدید به دیکشنری</div>
  <div class="panel-body">
     <div style="height:40px;"></div>
    <form class="form-horizontal col-md-offset-1 col-md-10" method="post" action="{{route('add_word')}}">
        {{ csrf_field() }}
          <div class="form-group">
            <input id="english" type="text" name="english" class="form-control"  placeholder="انگلیسی" value="{{ old('english') }}" >
          </div>
          <div class="form-group">
            <textarea  id="persian" name="persian" class="form-control" placeholder="Persian" value="{{ old('persian') }}"></textarea>

        </div>
          <button type="submit" class="btn btn-primary">اضافه کردن</button>
      </form>
      <div style="height:40px;"></div>
  </div>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</div>
@stop
