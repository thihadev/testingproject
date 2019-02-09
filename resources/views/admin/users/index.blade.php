@extends('admin.layouts.master')

@section('title')
    User Management
@stop

@section ('style')

@stop

@section('content')

@if(Session::has('flash'))
    <div class="alert alert-success alert-flash">
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{Session::get('flash')}}
    </div>
@endif

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">User List Table</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $index=1; ?>
            @foreach($users as $user)
                <tr>
                    <td>{{$index}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->role == 1)
                            <label class="badge badge-danger">Admin</label>
                        @elseif($user->role == 2)
                            <label class="badge badge-info">User</label>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_{{$user->id}}"><span class="fa fa-trash"></span></button>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit',['id'=>$user->id])}}"><span class="fa fa-edit"></span></a>
                    </td>
                </tr>
                <?php $index++ ?>
                @endforeach
                </tbody>
            </table>
        </div>
      <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-md m-0 float-right">
                {{$users->links()}}
            </ul>
        </div>
    </div>
    <!-- /.card -->
</div>

@foreach($users as $user)
<!-- Delete Confirm Modal -->
    <div class="modal fade" id="modal_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="alert_ModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-info-circle"></span> Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                          style="display: inline;">

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-primary" id="delete-btn">Yes</button>
                    </form>
                    <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
@stop

@section('footer-script')

@stop