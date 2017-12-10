@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Your booking
                <small>{{Auth::user()->last_name}} {{Auth::user()->first_name }}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        @include('admin.messages.success')
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Thông tin khách hàng và đơn đặt phòng</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <h5>Họ Tên: {{Auth::user()->last_name}} {{Auth::user()->first_name }}</h5>
                            <hr>
                            <h5>Email: {{Auth::user()->email}}</h5>
                            <hr>
                            <h5>Số Điện Thoại: {{Auth::user()->phone_number}}</h5>
                            <hr>
                            <h5>Địa Chỉ: {{Auth::user()->address}}</h5>
                        </div>
                        <div class="col-lg-6" style="border-left: 1px solid black">
                            <h5>Tổng Tiền : {{ number_format($booking->total),0,",","." }} Vnđ</h5>
                            <hr>
                            <h5>Ngày Check-in - Check-out : {{$booking->check_in}} - {{$booking->check_out}}</h5>
                            <hr>
                            <h5>Trạng Thái Đơn :
                                @if($booking->status == 1) Đặt phòng
                                @elseif($booking->status == 2) Nhận phòng
                                @elseif($booking->status == 3) Trả phòng
                                @endif
                            </h5>
                            <hr>
                            <h5>Mã Bảo Vệ : {{$booking->code}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Thông Tin Phòng Đã Đặt</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Mã Số Phòng</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Loại Phòng</th>
                                <th>Trạng Thái Phòng</th>
                                <th>Hủy đặt phòng</th>
                            </tr>
                            </thead>
                            <tbody style="text-align: center">
                            <?php $i = 1;?>
                            @foreach($booking->bookRooms as $list)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$list->rooms->name}}</td>
                                    <td>{{$list->rooms->price}}</td>
                                    <td style="width: 210px;"><img src="{{asset($list->rooms->image1)}}" alt=""
                                                                   height="100" width="200"></td>
                                    <td>{{$list->rooms->roomTypes->name}}</td>
                                    <td>@if($list->rooms->status == 1) Đã đặt
                                        @elseif($list->rooms->status == 2 ) Phòng trống
                                        @endif</td>
                                    <td style="width:150px;">
                                        @if($list->rooms->status == 2)
                                            <form action="{{route('bookingManager.destroy', $list->id)
                                               }}" method="post">
                                                {{ csrf_field() }}
                                                <i class="fa fa-trash-o fa-fw"></i>
                                                <a onclick="if(confirm ('Bạn muốn xóa không?')){this
                                                .parentElement.submit();}"
                                                   href="javascript:void(0);">Cancel</a>
                                            </form>
                                        @else
                                            <span>Disable</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection