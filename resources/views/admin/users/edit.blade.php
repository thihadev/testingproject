@extends('admin.layouts.master')

@section('title')
    User Management
@stop

@section ('style')

@stop

@section('content')
<div class="col-md-6 offset-md-3">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">User Create Form</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form role="form" method="post" action="{{route('admin.users.update', $user->id)}}" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <div class="card-body">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <label for="name">User Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email"  value="{{ $user->email }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group {{ $errors->has('role') ? ' has-error' : '' }} ">
                <label for="role"><span class="fa fa-key"></span> Select Role</label>
                <select id="role" name="role" class="select2 form-control" style="width: 100%;" required tabindex="-1" aria-hidden="true">
                      <option value="1" {{$user->role == 1 ? "selected" : ""}}>Admin</option>
                      <option value="2" {{$user->role == 2 ? "selected" : ""}}>User</option>
                </select>
                @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                @endif
            </div>
            </div>
            <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary pull-right">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>

@stop

@section('footer-script')

@stop