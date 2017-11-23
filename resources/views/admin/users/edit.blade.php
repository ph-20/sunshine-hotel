@extends('admin.layouts.index')
@section('content')
    <div class="panel-heading"><h2>Edit A {{$user->first_name}} {{$user->last_name}}</h2>
    </div>
    {!! Form::model($user, ['url' => route('users.update',$user->id ),'method'=>'post']) !!}
    @include('admin.layouts.user')
    {!! Form::close() !!}
@stop