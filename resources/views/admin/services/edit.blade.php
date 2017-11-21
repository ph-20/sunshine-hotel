@extends('admin.layouts.index')

@section('content')
    <div id="page-wrapper">
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
            <form action="admin/service/edit/{{$service->id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Service Name</label>
                    <input class="form-control" name="txtName" value="{{$service->name}}"
                           placeholder="Please Enter Service Name"/>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" type="number" name="txtPrice" value="{{$service->price}}"
                           placeholder="Please Enter Price"/>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" style="height: 200px;"
                              name="txtDescription">{{$service->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Edit Service</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        {{--End row--}}
    </div>
@endsection