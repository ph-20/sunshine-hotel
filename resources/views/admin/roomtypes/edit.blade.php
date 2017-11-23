@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Room Type
                    <small>{{$roomTypes->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.messages.errors')
            @include('admin.messages.success')
            <form action="admin/roomtype/edit/{{$roomTypes->id}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Room Type Name</label>
                    <input class="form-control" name="name" value="{{$roomTypes->name}}" placeholder="Please Enter
                    RoomType Name"/>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description">{{$roomTypes->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Edit Room</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        {{--End row--}}
    </div>
@endsection