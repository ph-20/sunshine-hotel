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
                                    <td><a href="{{url('admin/manageruser/edit/'. $user->id)}}"><i class="fa fa-edit">Edit</i></a> - <a
                                                href="{{url('admin/manageruser/'. $user->id. '/delete')}}"
                                                onclick="return confirm('Are you sure to delete?')"><i
                                                    class="glyphicon glyphicon-trash">Delete</i></a></td>
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