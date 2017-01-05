@extends('main')
@section('content')
    {{--{{$product}}--}}

    @foreach($product as $attribute)
        <img src="\DemoEcommerce\public\images\{{$attribute->image}}" class="img-responsive" >
       <h3> Product Name: {{$attribute->productname}}</h3><br>
        <h3>Categorie: {{ $attribute->productcategory}}</h3><br>
        <h3>Price: USD {{ $attribute->price}}</h3><br>
        <h3>Quantity: {{ $attribute->quantity}}</h3><br>
        <h3>Brand: {{ $attribute->brand}}</h3><br>
        <h3>Description: {{ $attribute->description}}</h3><br>

    @endforeach
    {!! Form::open(array('route' => 'payment.create','method'=>'get')) !!}
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectedquantity"><h3>Select Quantity</h3></label>
    <div class="col-md-4">
        <input id="selectedquantity" name="selectedquantity"  class="form-control input-md"  type="text">

    </div></div>


    <div class="form-group">
        <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buy Now</button>
        </div>
    </div>
    {!! Form::close() !!}

@endsection