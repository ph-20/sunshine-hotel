@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Room
                    <small>{{$room->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.messages.errors')
            @include('admin.messages.success')
            <form action="admin/room/edit/{{$room->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Rooms Type</label>
                    <select class="form-control" name="roomTypeid">
                        @foreach($roomType as $rt)
                            <option
                                    @if($room->room_type_id == $rt->id)
                                    selected
                                    @endif
                                    value="{{$rt->id}}">{{$rt->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Room Name</label>
                    <input class="form-control" name="txtName" value="{{$room->name}}"
                           placeholder="Please Enter Room Name"/>
                </div>
                <div class="form-group">
                    <label>Price VND</label>
                    <input class="form-control" type="number" name="txtPrice" value="{{$room->price}}"
                           placeholder="Please Enter Price"/>
                </div>
                <div class="form-group">
                    <label>Amount People</label>
                    <input class="form-control" name="txtAmount" value="{{$room->amount_people}}"
                           placeholder="Please Enter Amount People"/>
                </div>
                <div class="form-group">
                    <label>Image 1</label>
                    <input type="file" name="image1"><br>
                    <div class="form-group">
                        <label>Old Image 1 </label>
                        <br>
                        <img class="img-thumbnail" width="200px" src="{{asset($room->image1) }}">
                    </div>
                    <label>Image 2</label>
                    <input type="file" name="image2"><br>
                    <label>Image 3</label>
                    <input type="file" name="image3"><br>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="txtDescription">{{$room->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="0" @if($room->status == 0)   checked @endif type="radio">Trả
                        phòng
                    </label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="1" @if($room->status == 1)   checked @endif type="radio">Đặt
                        phòng
                    </label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="2" @if($room->status == 2)   checked @endif type="radio">Đang ở
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Edit Room</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>

        {{--End row--}}
    </div>
@endsection