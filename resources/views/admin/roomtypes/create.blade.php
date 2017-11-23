@extends('admin.layouts.index')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Room Type
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.messages.errors')
            @include('admin.messages.success')
            <form action="{{ route('roomtypes.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Room Type Name</label>
                    <input class="form-control" name="name" value="{{ old('name') }}" placeholder="Please Enter RoomType Name"/>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Add Room</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>

        {{--End row--}}
@endsection