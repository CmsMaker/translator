
  @extends('page.home')

    @section('left-content')
<div class="panel panel-info">
  <div class="panel-heading">Report</div>
  <div class="panel-body">
    <a class="list-group-item">all words  :   {{$count_words}}</a>
    <a class="list-group-item">number of admins:  {{$count_admins}}</a>
    <a class="list-group-item">number of users  :  {{$count_users}}</a>
  </div>
</div>
@stop
