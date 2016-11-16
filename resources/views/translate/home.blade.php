@extends('default.home')

  @section('content')
  <div style="height:120px;"></div>
    <div class="row">
      <div class="col-md-5">
        <a href="#" class="col-md-offset-3 btn btn-primary">English</a>
        <a href="#" class="btn btn-primary">Persian</a>
      </div>
      <div class="col-md-2" ></div>
      <div class="col-md-5">
        <a href="#" class="col-md-offset-6 btn btn-primary">English</a>
        <a href="#" class="btn btn-primary">Persian</a>
      </div>
    </div>
    <div class="row">
      <div style="height:20px;"></div>
      <form class="" action="" method="post">
        <div class="col-md-offset-1 col-md-4">
          <textarea rows="6" cols="50"></textarea>
        </div>
        <div class="col-md-2">
          <a href="#" class="col-md-offset-2 btn btn-primary">
            Translate to persian
          </a>
        </div>
        <div class="col-md-4">
          <textarea rows="6" cols="50"></textarea>
        </div>
      </form>
    </div>
    <div class="row"></div>
  @stop
