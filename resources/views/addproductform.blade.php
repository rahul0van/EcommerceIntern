@extends('main')
@section('content')
    {!! Form::open(array('route' => 'products.store','method'=>'POST','novalidate' => 'novalidate', 'files' => true)) !!}
    @include('addproduct')
    {!! Form::close() !!}

@endsection