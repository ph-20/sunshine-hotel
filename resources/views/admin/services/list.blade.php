@extends('admin.layouts.index')

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Service
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            @include('admin.messages.success')
            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Price VND</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                @foreach($service as $sv)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$sv->name}}</td>
                        <td>{{number_format($sv->price,0,",",".") }}</td>
                        <td style="width: 700px;">{{substr($sv->description,0,55)}}...</td>
                        <td class="center" onclick="return confirm('Bạn muốn xóa không?');"><i class="fa fa-trash-o
                        fa-fw"></i><a
                                    href="{{ route('services.destroy', $sv->id) }}">Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i><a
                                    href="{{ route('services.edit', $sv->id) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection