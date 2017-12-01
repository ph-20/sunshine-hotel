@extends('hotel.layouts.app')

@section('title')
    The Sunshine
@endsection

@section('content')
    <!-- BANNER SLIDER -->
    @include('hotel.layouts.bannerSlider')
    <!-- END / BANNER SLIDER -->

    <!-- CHECK AVAILABILITY -->
    @include('hotel.layouts.checkAvailability')
    <!-- END / CHECK AVAILABILITY -->
@stop