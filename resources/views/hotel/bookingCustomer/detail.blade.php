@extends('hotel.layouts.app')
@section('subBanner')
    @include('hotel.layouts.subBanner')
@endsection
@section('content')
    <p>
    <h2 style="padding-left:50px; ">Your Booking
        <small>{{Auth::user()->first_name }} {{Auth::user()->last_name}} </small>
    </h2></p>
    <section class="section-room bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('admin.messages.success')
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Customer information and reservations</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <h6>Full Name: {{Auth::user()->first_name }} {{Auth::user()->last_name}} </h6>
                                        <hr>
                                        <h6>Email: {{Auth::user()->email}}</h6>
                                        <hr>
                                        <h6>Phone Number: +84{{Auth::user()->phone_number}}</h6>
                                        <hr>
                                        <h6>Address: {{Auth::user()->address}}</h6>
                                    </div>
                                    <div class="col-lg-6" style="border-left: 1px solid black">
                                        <h6>Check-in: {{$booking->check_in}}</h6>
                                        <hr>
                                        <h6>Check-out: {{$booking->check_out}}</h6>
                                        <hr>
                                        <h6>Status:
                                            @if($booking->status == 1) Đặt phòng
                                            @elseif($booking->status == 2) Nhận phòng
                                            @elseif($booking->status == 3) Trả phòng
                                            @endif
                                        </h6>
                                        <hr>
                                        <h6>Booking Code: {{$booking->code}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Information Booked</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Room</th>
                                            <th>Price Vnd</th>
                                            <th>Image</th>
                                            <th>Room Type</th>
                                            <th>Status</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>
                                        <tbody style="text-align: center">
                                        <?php $i = 1;?>
                                        @foreach($booking->bookRooms as $list)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$list->rooms->name}}</td>
                                                <td>{{number_format($list->rooms->price)}}</td>
                                                <td style="width: 210px;"><img src="{{asset($list->rooms->image1)}}"
                                                                               alt=""
                                                                               height="100" width="200"></td>
                                                <td>{{$list->rooms->roomTypes->name}}</td>
                                                <td>@if($list->rooms->status == 1) Đã đặt
                                                    @elseif($list->rooms->status == 2 ) Phòng trống
                                                    @endif</td>
                                                <td style="width:150px;">
                                                    @if($list->rooms->status == 2)
                                                        <form action="{{route('bookingCustomer.update', $list->id)
                                               }}" method="post">
                                                            {{ csrf_field() }}
                                                            <i class="fa fa-trash-o fa-fw"></i>
                                                            <a onclick="if(confirm ('Bạn muốn hủy phòng này không?'))
                                                            {this
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
                <div class="col-lg-2 col-lg-push-5">
                    <a href="{{ route('bookingCustomer.index')  }}" class="vailability-submit">
                        <span class="awe-btn awe-btn-13">Back to Your Booking</span></a>
                </div>
            </div>
        </div>
    </section>
@stop