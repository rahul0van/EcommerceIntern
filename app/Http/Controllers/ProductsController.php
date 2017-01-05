<?php

namespace App\Http\Controllers;

use App\Products;
//use Dotenv\Validator;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Products::all();
       //dd ($products);
         return view('productsview')->with('products',$products);
        /*return view('view')->with(compact('products'));*/
       //return view('addproduct');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addproductform');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Products $products)
    {      /* dd($request);
        dd(Input::get('product_name'));*/
     /*   $this->validate($request, [
            'productname' => 'required',
            'productcategory' => 'required',
            'quantity' => 'required|max:3|numeric',
            'price' => 'required|numeric',
        ]);*/
     $rules = array(
         'productname' => 'required',
         'productcategory' => 'required',
         'quantity' => 'required|max:100|numeric',
         'price' => 'required|numeric'
     );
        $messages = array(
            'required' => 'This field is important.',
            'max'=> 'The value is more than 100.',
            'numeric'=> 'The value must be number'
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('products/create')
                ->withErrors($validator);
        }

        else {

            $file= $request->file('image');
           // dd($file->getClientOriginalName());
           // $destinationPath = '/public/uploads/';
            $filename=$file->getClientOriginalName();
            //dd($filename);
            $file->move(base_path() . '/public/images/',$filename);
            //dd($filename);


            //$products->create($request->all());

/*            $file = Input::file('image');
            $img = Image::make($file);
            Response::make($img->encode('jpeg'));*/


            $product= new Products;
            $product->productname =$request->productname;
            $product->productcategory =$request->productcategory;
            $product->price =($request->price);
            $product->quantity =$request->quantity;
            $product->description =$request->description;
            $product->brand =$request->brand;
            $product->image = $filename;

            $product->save();

            return redirect()->action('ProductsController@index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($p_id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
