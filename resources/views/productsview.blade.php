@extends('main')
@section('content')
    {!! Form::open(array('route' => 'products.create','method'=>'Get')) !!}
    @include('addproductbutton')
    {!! Form::close() !!}
    @include('view')

@endsection