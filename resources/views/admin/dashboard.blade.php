@extends('admin.layouts.master')

@section('title')
  Dashboard
@stop

@section('content')

<div class="col-lg-3 col-6">
  <!-- small card -->
  <div class="small-box bg-success">
    <div class="inner">
      <h3>{{$users}}</h3>

      <p>Users</p>
    </div>
    <div class="icon">
      <i class="fa fa-users"></i>
    </div>
    <a href="{{route('admin.users.index')}}" class="small-box-footer">
      More info <i class="fa fa-arrow-circle-right"></i>
    </a>
  </div>
</div>
        
@stop

@section('scripts')

@stop