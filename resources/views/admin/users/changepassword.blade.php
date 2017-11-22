@extends('admin.layouts.index')
@section('content')

    <h2>Change Password {{$user->last_name}} {{$user->first_name}}</h2>
    <br>
    <br>
    {!! Form::model($user, ['url' => route('users.updatepassword',$user->id ),'method'=>'post']) !!}
        @include('admin.layouts.changepassword')
    {!! Form::close() !!}
@stop