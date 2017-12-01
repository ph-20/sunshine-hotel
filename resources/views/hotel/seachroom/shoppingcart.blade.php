@extends('hotel.layouts.app')
@section('subBanner')
    @include('hotel.layouts.subBanner')
@endsection
@section('content')
    <p><h2 style="padding-left:160px; ">BOOKING <small>List your booking</small></h2></p>
    <section class="section-room bg-white">
        <div class="container">
            <div class="room-wrap-1">
                <div class="row">
                    <!-- ITEM -->
                    <div class="cart-info">
                        <hr>
                        <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Person</th>
                                <th>Room Type</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;?>
                            @foreach($cart as $item)
                                <tr style="text-align: center; font-size: 120%;">
                                    <td>{{$i++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->options->person}}</td>
                                    <td>{{$item->options->roomtype}}</td>
                                    <td style="width: 210px;"><img src="{{asset($item->options->image)}}" alt=""
                                                               height="200"
                                             width="200"></td>
                                    <td>{{number_format($item->price)}} Vnd</td>
                                    <td class="center"><i class="fa fa-trash-o fa-fw"></i><a onclick="return confirm
                                    ('Bạn có muốn hủy đặt phòng không?');"
                                      href="{{ route('carts.destroy', $item->rowId) }}">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 pull-right">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <td><span class="extra bold totalamout"><h4><b>Total Vnd:</b></h4></span></td>
                                        <td>
                                            <span class="bold totalamout"><h4>{{ $subtotal }}</h4></span></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Confirm Booking" class="btn btn-primary pull-left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop