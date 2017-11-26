@extends('hotel.layouts.app')

@section('title')
    Trang chủ
@endsection

@section('content')
    <!-- BANNER SLIDER -->
    @include('hotel.layouts.bannerSlider')
    <!-- END / BANNER SLIDER -->

    <!-- CHECK AVAILABILITY -->
    @include('hotel.layouts.checkAvailability')
    <!-- END / CHECK AVAILABILITY -->
    <h1>TRANG CHỦ</h1>
@stop