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
                        @endif
                    </td>
                    <td>
                        @if($list->status == 1)
                            <form action="{{route('bookingManager.update', [$list->id,'status'=>2])}}" method="post">
                                {{ csrf_field() }}
                                <i class="fa fa-pencil"></i>
                                <a onclick="if(confirm ('Bạn muốn đổi trạng thái thành nhận phòng không?')){
                                    this.parentElement.submit();}" href="javascript:void(0);">
                                    Nhận phòng</a>
                            </form>
                        @elseif($list->status == 2)
                            <form action="{{route('bookingManager.update', [$list->id,'status'=>3])}}" method="post">
                                {{ csrf_field() }}
                                <i class="fa fa-pencil"></i>
                                <a onclick="if(confirm ('Bạn muốn đổi trạng thái thành nhận phòng không?')){
                                    this.parentElement.submit();}" href="javascript:void(0);">
                                    Trả phòng</a>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection