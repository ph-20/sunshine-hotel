@extends('hotel.layouts.app')
@section('content')
    <h1>List All Room For Room Type Family</h1>
    <section class="section-room bg-white">
        <div class="container">
            <div class="room-wrap-1">
                <div class="row">
                    <!-- ITEM -->
                    @foreach($rooms as $room)
                        <div class="col-md-6">
                            <div class="room_item-1">
                                <h2><a href="#">{!! $room->roomTypes->name !!} Room</a></h2>
                                <div class="img">
                                    <a href="#"><img src="{{asset($room->image1)}}" alt=""></a>
                                </div>
                                <div class="desc">
                                    <p>{{$room->description}}</p>
                                    <ul>
                                        <li>Max: {{$room->amount_people	}} Person(s)</li>
                                    </ul>
                                </div>
                                <div class="bot">
                                    <span class="price">Starting <span class="amout">{{$room->price	}}VNĐ</span> /days</span>
                                    <a href="{{ route('seachroom.detailroom', $room->id) }}" class="awe-btn awe-btn-13">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- END / ITEM -->
                </div>
            </div>
        </div>
    </section>
@stop