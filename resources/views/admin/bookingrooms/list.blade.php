@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Services Room
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        @include('admin.messages.success')
        <table class="table table-bordered table-striped table-hover" id="dataTables-example">
            <thead>
            <tr align="center">
                <th>No</th>
                <th>User Name</th>
                <th>Room Name</th>
                <th>Booking Id</th>
                <th>Amount</th>
                <th>Image 1</th>
                <th>Room Type</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1;?>
            @foreach($bookRooms as $br)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$br->bookings->users->last_name}}</td>
                    <td>{{$br->rooms->name}}</td>
                    <td>{{$br->booking_id}}</td>
                    <td style="width: 70px">{{$br->rooms->amount_people}}</td>
                    <td>
                        <img width="100px" src="{{asset($br->rooms->image1) }}" alt="">
                    </td>
                    <td>
                        @if($br->rooms->room_type_id == 1)
                            {{'VIP'}}
                        @elseif($br->rooms->room_type_id == 2)
                            {{'Deluxe'}}
                        @else()
                            {{'Family'}}
                        @endif
                    </td>
                    <td class="center"><i class="fa fa-eye"></i><a
                                href="{{ route('bookings.detail', $br->id) }}"> Xem dịch vụ</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection