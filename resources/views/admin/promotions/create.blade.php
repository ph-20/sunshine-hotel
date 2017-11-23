@extends('admin.layouts.index')
@section('content')
    {!! Form::model($promotion, ['url' => route('promotions.save'. $promotion->id), 'method'=>'post']) !!}
    @include('admin.layouts.promotion')
    {!! Form::close() !!}
@stop
