@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Room
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.messages.errors')
            @include('admin.messages.success')
            <form action="admin/room/create" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Rooms Type</label>
                    <select class="form-control" name="roomTypeid">
                        @foreach($roomType as $rt)
                            <option value="{{$rt->id}}">{{$rt->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Room Name</label>
                    <input class="form-control" name="txtName" value="{{old('txtName')}}"
                           placeholder="Please Enter Room Name"/>
                </div>
                <div class="form-group">
                    <label>Price VND</label>
                    <input class="form-control" type="number" name="txtPrice" value="{{old('txtPrice')}}"
                           placeholder="Please Enter Price"/>
                </div>
                <div class="form-group">
                    <label>Amount People</label>
                    <input class="form-control" name="txtAmount" value="{{old('txtAmount')}}"
                           placeholder="Please Enter Amount People"/>
                </div>
                <div class="form-group">
                    <label>Image 1</label>
                    <input type="file" name="image1"><br>
                    <label>Image 2</label>
                    <input type="file" name="image2"><br>
                    <label>Image 3</label>
                    <input type="file" name="image3"><br>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="txtDescription">{{old('txtDescription')}}</textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="0" checked="" type="radio">Trả phòng
                    </label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="1" type="radio">Đặt phòng
                    </label>
                    <label class="radio-inline">
                        <input name="rdoStatus" value="2" type="radio">Đang ở
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Add Room</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        {{--End row--}}
    </div>
@endsection