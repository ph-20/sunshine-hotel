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
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Service Name</label>
                    <input class="form-control" name="txtName" value="{{old('txtName')}}"
                           placeholder="Please Enter Service Name"/>
                </div>
                <div class="form-group">
                    <label>Price VND</label>
                    <input class="form-control" type="number" name="txtPrice" value="{{old('txtPrice')}}"
                           placeholder="Please Enter Price"/>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" style="height: 200px;" rows="3" name="txtDescription">{{old('txtDescription')}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Add Service</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        {{--End row--}}
@endsection