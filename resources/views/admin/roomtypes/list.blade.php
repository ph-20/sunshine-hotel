@extends('admin.layouts.index')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Room Type
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            @include('admin.messages.success')
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($roomTypes as $rt)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$rt->name}}</td>
                        <td>{{$rt->description}}</td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a
                                    href="{{ route('rooms.destroy', $rt->id) }}" onclick="return confirm('Bạn muốn xóa không?');">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a
                                    href="{{ route('rooms.edit', $rt->id) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{--End row--}}
@endsection