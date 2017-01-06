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


  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <!-- Identify your business so that you can collect the payments. -->
      <input type="hidden" name="cmd" value="_xclick">
        <h3>Paypal Email: </h3> <input type="text" name="business" class="form-control input-md" ><br>

        <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
       {{-- <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="add" value="1">
--}}
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="{{$attribute->productname}}">
        <input type="hidden" name="amount" value="{{ $attribute->price}}">
        <input type="hidden" name="currency_code" value="USD">
    <h3>Select Quantity</h3><input id="quantity" name="quantity"  class="form-control input-md"  type="text">



    <div class="form-group">
        <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buy Now</button>
        </div>
    </div>
    </form>
        {{--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <INPUT TYPE="hidden" name="cmd" value="_xclick-auto-billing">
            <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
            <input type="image"
                   src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
            <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif"
                 width="1" height="1">
        </form>--}}


    @endforeach

@endsection