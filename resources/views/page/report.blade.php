
  @extends('page.home')

    @section('left-content')
<div class="panel panel-info text-right">
  <div class="panel-heading">گزارشات</div>
  <div class="panel-body">
    <a class="list-group-item">تعداد کلمات  :   {{$count_words}}</a>
    <a class="list-group-item">  تعداد مدیران:  {{$count_admins}}</a>
    <a class="list-group-item">تعداد کاربران  :  {{$count_users}}</a>
  </div>
</div>
@stop
