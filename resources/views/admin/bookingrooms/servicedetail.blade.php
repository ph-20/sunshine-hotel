@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Service
                <small>{{$bookRooms->rooms->name}}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        @include('admin.messages.success')
        <a href="{{url('admin/bookings/'.$bookRooms->booking_id.'/'.$bookRooms->room_id)}}"
           class='btn btn-primary pull-left'>Add Service</a><br>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="dataTables-example">
            <thead>
            <tr align="center">
                <th>Service Name</th>
                <th>Price VND</th>
                <th>Unit</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookRooms->bookRoomServices as $bookRoomService)
                <tr>
                    <td>{{$bookRoomService->services->name}}</td>
                    <td>{{number_format($bookRoomService->services->price)}}</td>
                    <td>{{$bookRoomService->unit}}</td>
                    <td class="center" onclick="return confirm('Bạn muốn xóa không?');">
                        <i class="fa fa-trash-o fa-fw"></i>
                        <a href="{{ route('bookings.destroy', $bookRoomService->id) }}"> Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection