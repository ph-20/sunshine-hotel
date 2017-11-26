@extends('admin.layouts.index')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Service
                    <small>{{$service->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            @include('admin.messages.errors')
            @include('admin.messages.success')
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Service Name <b style="color: red">*</b></label>
                    <input class="form-control" name="txtName" value="{{old('txtName', $service->name)}}"
                           placeholder="Please Enter Service Name"/>
                </div>
                <div class="form-group">
                    <label>Price <b style="color: red">*</b></label>
                    <input class="form-control" type="number" name="txtPrice" value="{{old('txtPrice', $service->price)}}"
                           placeholder="Please Enter Price"/>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" style="height: 200px;"
                              name="txtDescription">{{old('txtDescription', $service->description)}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Edit Service</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        {{--End row--}}
@endsection