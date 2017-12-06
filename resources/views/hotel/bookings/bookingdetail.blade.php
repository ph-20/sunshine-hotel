@extends('hotel.layouts.app')
@section('subBanner')
    @include('hotel.layouts.subBanner')
@endsection
@section('content')
    <p>
    <h2 style="padding-left:50px; ">DETAIL BOOKING
        <small>{{Auth::user()->last_name}} {{Auth::user()->first_name }}</small>
    </h2></p>
    <section class="section-room bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Detail Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>Email: {{ Auth::user()->email }}</p>
                                            <hr>
                                            <p>Phone: {{ Auth::user()->phone_number }}</p>
                                            <hr>
                                            <p>Address: {{ Auth::user()->address }}</p>
                                            <hr>
                                            <form action="{{ route('carts.updateDetail', Auth::user()->id) }}" method="post">
                                                {{ csrf_field() }}
                                                <p>Booking code:<b><input type="text" style="border: none;"
                                                                          name="code" readonly="readonly" value="{{ (strtoupper(str_random(6))) }}"></b></p>
                                                <hr>
                                                <p>Requiment: Checkin - Checkout</p>
                                                <div class="availability-form">
                                                    <input type="text" style="border: 2px solid #e1bd85;" name="checkin"
                                                           class="awe-calendar
                                                    from"
                                                           placeholder="Arrival Date">
                                                    <input type="text" style="border: 2px solid #e1bd85;"
                                                           name="checkout" class="awe-calendar to"
                                                           placeholder="Departure Date">
                                                    <hr>
                                                    <div class="vailability-submit">
                                                        <button class="awe-btn awe-btn-13"
                                                                type="submit">Confirm Booking</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Detail Booking</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @foreach($cart as $item)
                                                <div class="cart-item">
                                                    <div class="media">
                                                        <img style="width: 210px;"
                                                             src="{{asset($item->options->image)}}" alt="">
                                                        <div class="media-body pull-right" style="padding-right:
                                                        170px;">
                                                            <span
                                                                    class="cart-item-title">
                                                                {{$item->name}}</span><br>
                                                            <span>Price: {{number_format($item->price)}} Vnd</span><br>
                                                            <span>Person: {{$item->options->person}}</span><br>
                                                            <span>Roomtype: {{$item->options->roomtype}}</span>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <span class="bold totalamout"><h4>Total Vnd: <b>{{ $subtotal
                                                }}</b></h4></span>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop