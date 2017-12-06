@extends('hotel.layouts.app')
@section('subBanner')
    @include('hotel.layouts.subBanner')
@endsection
@section('content')
    <p>
    <h2 style="padding-left:50px; ">Booking Complete
        <small>{{Auth::user()->last_name}} {{Auth::user()->first_name }}</small>
    </h2></p>
    <section class="section-room bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Detail Customer</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="padding-right: 45px; border-right: solid 1px darkgray">
                                        Name: {{Auth::user()->last_name}} {{Auth::user()->first_name }} </span>
                                    <span style="margin-left: 45px;padding-right: 45px; border-right: solid 1px
                                    darkgray">
                                        Email: {{ Auth::user()->email }}</span>
                                    <span style="margin-left: 45px;padding-right: 45px; border-right: solid 1px
                                    darkgray">
                                        Phone: {{ Auth::user()->phone_number }}</span>
                                    <span style="margin-left: 45px;padding-right: 45px;">
                                        Address: {{ Auth::user()->address }}</span>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Detail Booking</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-bordered table-hover"
                                           id="dataTables-example">
                                        <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>Check-in</th>
                                            <th>Check-out</th>
                                            <th>Total Vnd</th>
                                            <th>Code</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1;?>
                                        @foreach($bookings as $list)
                                            <tr class="even gradeC" align="center">
                                                <td>{{$i++}}</td>
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
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-2 col-lg-push-5">
                    <a href="{{ url('/')  }}" class="vailability-submit">
                        <span class="awe-btn awe-btn-13">Back to Homepage</span></a>
                </div>
            </div>
        </div>
    </section>
@stop