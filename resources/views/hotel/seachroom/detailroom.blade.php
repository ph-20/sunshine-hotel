@extends('hotel.layouts.app')
@section('content')
    <!-- ROOM DETAIL -->
    <section class="section-room-detail bg-white">
        <div class="container">
            <!-- DETAIL -->
            <div class="room-detail">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- LAGER IMGAE -->
                        <div class="room-detail_img">
                            <div class="room_img-item">
                                <img src="{{asset($room->image1)}}" alt="">
                            </div>
                            <div class="room_img-item">
                                <img src="{{asset($room->image2)}}" alt="">
                            </div>
                            <div class="room_img-item">
                                <img src="{{asset($room->image3)}}" alt="">
                            </div>
                        </div>
                        <!-- END / LAGER IMGAE -->
                        <!-- THUMBNAIL IMAGE -->
                        <div class="room-detail_thumbs">
                            <a href="#"><img src="{{asset($room->image1)}}" alt=""></a>
                            <a href="#"><img src="{{asset($room->image2)}}" alt=""></a>
                            <a href="#"><img src="{{asset($room->image3)}}" alt=""></a>
                        </div>
                        <!-- END / THUMBNAIL IMAGE -->
                    </div>
                </div>
            </div>
            <!-- END / DETAIL -->
            <!-- TAB -->
            <div class="room-detail_tab">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="room-detail_tab-header">
                            <li><a href="#overview" data-toggle="tab">OVERVIEW</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="room-detail_tab-content tab-content">
                            <!-- OVERVIEW -->
                            <div class="tab-pane fade active in" id="overview">

                                <div class="room-detail_overview">
                                    <q>{{$room->description}}</q>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <h6>NUMBER OF PEOPLE IN THE ROOM</h6>
                                            <ul>
                                                <li>Max: {{$room->amount_people}} Person(s)</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <h6>TYPE OF ROOM</h6>
                                            <ul>
                                                <li>{{$room->roomTypes->name}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END / OVERVIEW -->
                        </div>
                    </div>

                </div>

            </div>
            <!-- END / TAB -->
        </div>
    </section>
    <!-- END / SHOP DETAIL -->
@stop