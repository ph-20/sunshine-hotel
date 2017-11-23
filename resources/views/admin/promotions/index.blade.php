@extends('admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <hi>List All promotion</hi>
                    <a href="{{route('promotions.create')}}" class="btn btn-primary fa fa-plus" style="float: right;"> Create Promotion</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Code Promotion</th>
                                <th>Discount</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($promotions as $index => $promotion)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <td>{{$promotion->code}}</td>
                                    <td>{{$promotion->discount}}%</td>
                                    <td>{{$promotion->start_date}}</td>
                                    <td>{{$promotion->end_date}}</td>
                                    <td><form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <i class="glyphicon glyphicon-trash text-danger"></i>
                                            <a href="javascript:void(0);"
                                               onclick="if(confirm('Are you sure delete?')){$(this).parent().submit();}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop