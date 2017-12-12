@extends('hotel.layouts.app')
@section('subBanner')
    @include('hotel.layouts.subBanner')
@endsection
@section('content')
    <p>
    <h2 style="padding-left:50px; ">Booking Complete
        <small>{{Auth::user()->first_name }} {{Auth::user()->last_name}} </small>
    </h2></p>
    <section class="section-room bg-white">
        <div class="container">
            <div class="row">
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
                            <th>Detail</th>
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
                                    <a href="{{route('bookingCustomer.detail',$list->id)}}">Chi Tiết</a>
                                </td>
                                <td>
                                    <form action="{{route('bookingCustomer.destroy', $list->id)
                                               }}" method="post">
                                        {{ csrf_field() }}
                                        <i class="fa fa-trash-o fa-fw"></i>
                                        <a onclick="if(confirm ('Bạn muốn hủy đơn đặt phòng này ko không?')){this
                                                .parentElement.submit();}"
                                           href="javascript:void(0);">Cancel</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @if(!isset($list))
                        <div class="col-md-12">
                            <h4 style="text-align: center; color: gray;"><i>Chưa có đơn đặt phòng</i></h4>
                        </div>
                    @endif
                </div>
                <div class="col-lg-2 col-lg-push-5" style="margin-top: 40px">
                    <a href="{{ url('/')  }}" class="vailability-submit">
                        <span class="awe-btn awe-btn-13">Back to Homepage</span></a>
                </div>
            </div>
        </div>
    </section>
@stop