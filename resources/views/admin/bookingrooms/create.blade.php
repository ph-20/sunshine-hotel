@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Service
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.messages.errors')
        @include('admin.messages.success')
        <form action='admin/bookings/{{$bookRoom->booking_id}}/{{$bookRoom->room_id}}' method="POST"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Choose Service <b style="color: red">*</b></label>
                <select class="form-control" name="service_id">
                    @foreach($service as $sv)
                        <option value="{{$sv->id}}">{{$sv->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Unit <b style="color: red">*</b></label>
                <input class="form-control" type="number" name="unit" value="{{old('unit')}}"
                       placeholder="Please Enter Price"/>
            </div>
            <button type="submit" class="btn btn-success">Add Service</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>
    {{--End row--}}
@endsection