@extends('admin.layouts.index')

@section('content')
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
            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Price VND</th>
                    <th style="width: 80px">Status</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Image 1</th>
                    <th>Image 2</th>
                    <th>Image 3</th>
                    <th>Room Type</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                @foreach($room as $rs)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$rs->name}}</td>
                        <td>{{number_format($rs->price,0,",",".") }}</td>
                        <td style="width: 70px;">
                            @if($rs->status == 1)
                                {{'Đã đặt'}}
                            @elseif($rs->status == 2)
                                {{'Phòng trống'}}
                            @endif
                        </td>
                        <td>{{$rs->description}}</td>
                        <td style="width: 70px">{{$rs->amount_people}}</td>
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
                        <td class="center"><i class="fa fa-trash-o
                        fa-fw"></i><a onclick="return confirm('Bạn muốn xóa không?');"
                                    href="{{ route('rooms.destroy', $rs->id) }}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a
                                    href="{{ route('rooms.edit', $rs->id) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection