@extends('main')
@section('content')
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="PayPal Email Id">

    <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="Your Product Name">
    <input type="hidden" name="amount" value="3.95">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Display the payment button. -->
    <input type="image" name="submit" border="0"
           src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
           alt="PayPal - The safer, easier way to pay online">
    <img alt="" border="0" width="1" height="1"
         src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
   {{-- {!! Form::open(array('route' => 'products.store','method'=>'POST','novalidate' => 'novalidate', 'files' => true)) !!}
    @include('addproduct')
    {!! Form::close() !!}--}}

@endsection