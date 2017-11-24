@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Booking Room
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-12">
        @include('admin.messages.success')
        @foreach($bookRoom as $br)
            <p>Room Id: {{$br->room_id}}</p>
            <p>Booking Id: {{$br->booking_id}}</p>
            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Service Name</th>
                    <th>Unit</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($br->services as $service)--}}
                    {{--<tr>--}}
                        {{--<td>{{$service->name}}</td>--}}
                        {{--<td>{{$service->pivot->unit}}</td>--}}
                        {{--<td class="center" onclick="return confirm('Bạn muốn xóa không?');"><i class="fa fa-trash-o--}}
                        {{--fa-fw"></i><a--}}
                                    {{--href="{{ route('bookings.destroy', $br->id) }}">Delete</a></td>--}}
                        {{--<td class="center"><i class="fa fa-pencil fa-fw"></i><a--}}
                                    {{--href="{{ route('bookings.edit', $br->id) }}">Edit</a></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        @endforeach
    </div>
@endsection