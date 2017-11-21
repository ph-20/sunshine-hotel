@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Service
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            @include('admin.messages.success')
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr align="center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($service as $sv)
                    <tr>
                        <td>{{$sv->id}}</td>
                        <td>{{$sv->name}}</td>
                        <td>{{$sv->price}}</td>
                        <td style="width: 700px;">{{$sv->description}}</td>
                        <td class="center" onclick="return confirm('Bạn muốn xóa không?');"><i class="fa fa-trash-o
                        fa-fw"></i><a
                                    href="admin/service/delete/{{$sv->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a
                                    href="admin/service/edit/{{$sv->id}}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection