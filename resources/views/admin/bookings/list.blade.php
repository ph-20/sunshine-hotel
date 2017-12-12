@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Bookings
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        @include('admin.messages.success')
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
            <tr align="center">
                <th>No</th>
                <th>Name User</th>
                <th>Email</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Total Vnd</th>
                <th>Code</th>
                <th>Status</th>
                <th>Detail</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            @foreach($booking as $list)
                <tr class="even gradeC" align="center">
                    <td>{{$i++}}</td>
                    <td>{{$list->users->last_name}} {{$list->users->first_name}} </td>
                    <td>{{$list->users->email}}</td>
                    <td>{{$list->check_in}}</td>
                    <td>{{$list->check_out}}</td>
                    <td>{{number_format($list->total),0,".".","}}</td>
                    <td>{{$list->code}}</td>
                    <td>
                        @if($list->status == 1)
                            Đặt phòng
                        @elseif($list->status == 2)
                            Nhận phòng
                        @elseif($list->status == 3)
                            Trả phòng
                        @elseif($list->status ==  4)
                            Hủy phòng
                        @endif
                    </td>
                    <td>
                        <a href="{{route('bookingManager.show',$list->id)}}">Chi Tiết</a>
                    </td>

                    <td class="center">
                        @if($list->status == 1)
                            <form action="{{route('carts.update',[$list->id,'status'=>2])}}" method="POST">
                                {{csrf_field()}}
                                <button class="btn btn-primary" style="padding: 2px">
                                    Xác nhận
                                </button>
                            </form>
                        @elseif($list->status == 2)
                            <form action="{{route('carts.update',[$list->id,'status'=>3])}}" method="POST">
                                {{csrf_field()}}
                                <button class="btn btn-primary" style="padding: 2px">
                                    Check-in
                                </button>
                            </form>
                        @elseif($list->status == 3)
                            <form action="{{route('carts.update',[$list->id,'status'=>4])}}" method="POST">
                                {{csrf_field()}}
                                <button class="btn btn-success" style="padding: 2px">
                                    Check-out
                                </button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form action="{{route('carts.update',[$list->id,'status'=>5])}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <button class="btn " style="padding: 2px">
                                <i class="fa fa-trash-o  fa-fw"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection