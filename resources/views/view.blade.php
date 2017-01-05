{{--<html>
<head>
    <title>View</title>
</head>
<body>--}}
{{--hello
--}}{{--{{$products ['product_name']}}--}}{{--

{{$products}}

@foreach ($products as $product)
    {{ $product->productname}}
@endforeach--}}
{{--<table border="1">
    <tr>
        <th>Product ID</th>
        <th>ProductName</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Brand</th>
        <th>Description</th>
        <th>Image</th>
    </tr>--}}
@foreach ($products as $product)
        {{--<tr>
            <td>{{ $product->p_id}} </td>
            <td>{{ $product->productname}} </td>
            <td>{{ $product->productcategory}} </td>
            <td>{{ $product->price}} </td>
            <td>{{ $product->quantity}}</td>
            <td>{{ $product->brand}}</td>
            <td>{{ $product->description}}{{ $product->image }} </td>
            <td><img src="\DemoEcommerce\public\images\{{$product->image}}" class="img-responsive" > </td>
        </tr>--}}


        <div class="col-md-4">

            <div class="hovereffect">
                <img class="img-responsive" src="\DemoEcommerce\public\images\{{$product->image}}" alt="">
                <div class="overlay">
                    <h2>{{ $product->productname}}</h2>
                    <a class="info" href="{{ route('products.show', $product->p_id) }}">View Details</a>
                </div>

            </div>
            <div class="col-md-4">
                <h4>   Price: <span class="label label-default">USD {{$product->price}}</span></h4>
            </div>


        </div>



@endforeach
</table>
{{--

</body>
</html>--}}
