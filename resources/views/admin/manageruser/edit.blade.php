@extends('admin.layouts.index')
@section('content')
    <div class="panel-heading"><h2>Edit A {{$user->last_name}} {{$user->fisrt_name}}</h2>
    </div>
    {!! Form::model($user, ['url' => 'admin/manageruser/' . $user->id,'files' => true,'enctype' => 'multipart/form-data','method'=>'put']) !!}
    @include('admin.layouts.manageruser')
    {!! Form::close() !!}
@stop