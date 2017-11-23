@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Room Service
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.messages.errors')
            @include('admin.messages.success')
            <form action="admin/roomservices/create" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Room</label>
                    <select class="form-control" name="roomTypeid">
                        @foreach($room as $r)
                            <option
                            {{--@if($bookRoomService->book_rooms->rooms->id == $r->id)--}}

                            value="{{$r->id}}">{{$r->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Book room</label>
                    <select class="form-control" name="roomTypeid">
                        @foreach($bookRoomService as $brs)
                            <option value="{{$brs->id}}">{{$brs->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Unit</label>
                    <input class="form-control" type="number" name="txtUnit" value="{{old('txtUnit')}}"
                           placeholder="Please Enter Price"/>
                </div>
                <button type="submit" class="btn btn-success">Add Room</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        {{--End row--}}
    </div>
@endsection