@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Rooms
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
                    <th>Price VND</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Amount People Id</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Room Type</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($room as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{$rs->price}}</td>
                        <td>
                            @if($rs->status == 0)
                                {{'Phòng Trống'}}
                            @else()
                                {{'Phòng đã đặt'}}
                            @endif
                        </td>
                        <td>{{$rs->description}}</td>
                        <td>{{$rs->amount_people}}</td>
                        <td>
                            <img width="100px" src="{{asset($rs->image1) }}" alt="">
                        </td>
                        <td>
                            <img width="100px" src="{{asset($rs->image2) }}" alt="">
                        </td>
                        <td>
                            <img width="100px" src="{{asset($rs->image3) }}" alt="">
                        </td>
                        <td>
                            @if($rs->room_type_id == 1)
                                {{'VIP'}}
                            @elseif($rs->room_type_id == 2)
                                {{'Deluxe'}}
                            @else()
                                {{'Family'}}
                            @endif
                        </td>
                        <td class="center" onclick="return confirm('Bạn muốn xóa không?');"><i class="fa fa-trash-o
                        fa-fw"></i><a
                                    href="admin/room/delete/{{$rs->id}}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a
                                    href="admin/room/edit/{{$rs->id}}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection