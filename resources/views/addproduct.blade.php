{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Product</title>
</head>
<body>
<form action="/DemoEcommerce/public/products"  method ="post" class="form-horizontal">--}}
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>

        <!-- Text input-->
        {{--<div class="form-group">
            <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
            <div class="col-md-4">
                <input id="product_id" name="product_id"  class="form-control input-md" required="" type="text">

            </div>
        </div>--}}

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productname">PRODUCT NAME</label>
            <div class="col-md-4">
                <input id="productname" name="productname"  class="form-control input-md"  type="text">

            </div>
            <div class="col-md-4"> @if ($errors->has('productname')) <p class="help-block">{{ $errors->first('productname') }}</p> @endif</div>
        </div>
        <br><br>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="productcategoy">PRODUCT CATEGORIE</label>
            <div class="col-md-4">
                <select id="productcategoycategorie" name="productcategory" class="form-control">
                    <option>male</option>
                    <option>female</option>
                </select>
            </div>
        </div>
        <br><br>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="price">PRICE</label>
            <div class="col-md-4">
                <input id="price" name="price"  class="form-control input-md"  type="text">
            </div>
        <div class="col-md-4">@if ($errors->has('price')) <p class="help-block">{{ $errors->first('price') }}</p> @endif</div>
        </div>
        <br><br>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="quantity">AVAILABLE QUANTITY</label>
            <div class="col-md-4">
                <input id="quantity" name="quantity"  class="form-control input-md" type="text">

            </div>
            <div class="col-md-4">@if ($errors->has('quantity')) <p class="help-block">{{ $errors->first('quantity') }}</p> @endif</div>
        </div>
        <br><br>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="brand">BRAND</label>
            <div class="col-md-4">
                <input id="brand" name="brand"  class="form-control input-md"  type="text">


            </div>
        </div>
        <br><br>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">PRODUCT DESCRIPTION</label>
            <div class="col-md-4">
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>
        <br><br><br><br>


                <!-- File Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="image">SELECT IMAGE</label>
                    <div class="col-md-4">
                        <input id="image" name="image" class="input-file" type="file">
                    </div>
                </div>
            <br><br>
                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            <br><br>

    </fieldset>
{{--
</form>

</body>
</html>--}}
