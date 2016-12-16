@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">کاربران</div>
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <tr>
        <td>کاربر</td>
        <td>آدرس ایمیل</td>
          <td>  </td>
      </tr>
      @foreach($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
                  <td>
                  @if($user->level_id == 2)
                    <a href="{{route('edit_user',['id' => $user->id])}}" class="btn btn-primary">اضافه کردن به لیست مدیران</a>
                  @elseif($user->level_id == 1)
                    <a href="{{route('edit_user',['id' => $user->id])}}" class="btn btn-primary">اضافه کردن به لیست کاربران</a>
                  @endif
                    <a href="{{route('delete_user',['id' => $user->id])}}" class="btn btn-primary"
                      data-toggle="tooltip" data-placement="bottom" title="حذف">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
            </tr>
      @endforeach
    </table>

  </div>
</div>
@stop
