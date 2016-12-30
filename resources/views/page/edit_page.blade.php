@extends('page.home')

  @section('left-content')
  <div class="panel panel-info">
    <div class="panel-heading text-right">ویرایش اطلاعات</div>
    <div class="panel-body">
         <div style="height:40px;"></div>
              <form class="form-inline" method="post" action="{{route('username')}}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" id="username" name="username" class="col-md-offset-2 form-control text-right" placeholder="نام کاربری جدید" value="{{ old('username') }}" >
                  </div>
                  <button type="submit" class="col-md-offset-1 btn btn-primary ">ویرایش نام کاربری</button>
                </form>
                <div style="height:20px;"></div>
         <div style="height:40px;"></div>
        <form class="form-inline" method="post" action="{{route('email')}}">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="email" id="email" name="email" class="col-md-offset-2 form-control text-right" placeholder="آدرس ایمیل جدید" value="{{ old('email') }}" >
            </div>
            <button type="submit" class="col-md-offset-1 btn btn-primary">ویرایش آدرس ایمیل</button>
          </form>
          <div style="height:40px;"></div>
      </div>
    </div>
@stop
