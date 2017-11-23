@extends('admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <hi>List All User</hi>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Phone Number</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $index => $user)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <td>{{$user->last_name}} {{$user->first_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if ($user->role == 0) Khach Hang @else Admin @endif</td>
                                    <td>{{$user->phone_number}}</td>
                                    <td>@if ($user->active == 0) True @else False @endif</td>
                                    <td><a href="{{ route('users.edit', $user->id) }}"><i class="fa fa-edit">
                                                Edit</i></a>
                                        <a href="{{ route('users.changepassword', $user->id) }}"><i class="fa fa-cog">
                                                Change Password</i></a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <i class="glyphicon glyphicon-trash text-danger"></i>
                                            <a href="javascript:void(0);"
                                               onclick="if(confirm('Are you sure delete?')){$(this).parent().submit();}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop