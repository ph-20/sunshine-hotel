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
            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>No</th>
                    <th>Service Id</th>
                    <th>Book Room Id</th>
                    <th>Unit</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                @foreach($bookRoomService as $brs)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$brs->service_id}}</td>
                        <td>{{$brs->book_room_id}}</td>
                        <td></td>
                        <td class="center" onclick="return confirm('Bạn muốn xóa không?');"><i class="fa fa-trash-o
                        fa-fw"></i><a
                                    href="admin/service/delete/{{$brs->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a
                                    href="admin/service/edit/{{$brs->id}}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection