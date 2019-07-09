@extends('layouts.nav')

@section('title', '| Edit Role')


 <div class="container-fluid">
  <h1>Push and Pull</h1>
  <p>Resize the browser window to see the effect.</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8" style="background-color:lavender;">
 @section('content')
    </div>
    <div class="col-sm-8 col-sm-pull-4" style="background-color:lavenderblush;">.col-sm-8 .col-sm-pull-4</div>
  </div>
</div>


 @endsection
