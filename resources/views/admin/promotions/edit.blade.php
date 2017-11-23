@extends('admin.layouts.index')
@section('content')
    {!! Form::model($promotion, ['url' => route('promotions.update'. $promotion->id), 'method'=>'post']) !!}
    @include('admin.layouts.promotion')
    {!! Form::close() !!}
@stop
