@extends('page.home')

  @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">کاربران</div>
  <div class="panel-body">
    <table class="table table-bordered table-hover">
      <tr>
        <th>کاربر</th>
        <th>آدرس ایمیل</th>
          <th>  </th>
      </tr>
      @foreach($users as $translatesUser)
            <tr>
              <td>{{$translatesUser->name}}</td>
              <td>{{$translatesUser->email}}</td>
                  <td>
                  @if($translatesUser->level_id == 2)
                    <a href="{{route('edit_user',['id' => $translatesUser->id])}}" class="btn btn-primary">اضافه کردن به لیست مدیران</a>
                  @elseif($translatesUser->level_id == 1)
                    <a href="{{route('edit_user',['id' => $translatesUser->id])}}" class="btn btn-primary">اضافه کردن به لیست کاربران</a>
                  @endif
                    <a href="{{route('delete_user',['id' => $translatesUser->id])}}" class="btn btn-primary"
                      data-toggle="tooltip" data-placement="bottom" title="حذف">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
            </tr>
      @endforeach
    </table>

  </div>
</div>
<div class="row">
  <div class="col-md-offset-9">
    {{$users->links()}}
  </div>
</div>
@stop
