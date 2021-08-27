<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $product = Product::orderBy('created_at','desc')->paginate(3);
         return view('products.index')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *{!!!!}
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product= new Product;
        $product->item= $request->input('item');
        $product->desc= $request->input('desc');
        $product->location= $request->input('loc');
        $product->posted_by=auth()->user()->name;
        $product-> user_id= auth()->user()->id;
        $product->free= $request->has('free');
        $product->price= $request->input('price');
        $product->save();
        return redirect('/products')->with('success','Post Created');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::find($id);
        return view('products.show')->with('product',$product);
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
        $product=Product::find($id);
        return view('products.edit')->with('product',$product);
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
        $product=Product::find($id);
        $product->item= $request->input('item');
        $product->desc= $request->input('desc');
        $product->location= $request->input('loc');
        // $product->free= $request->input('free');
        $product->save();
        return redirect('/products')->with('success','Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect('/home')->with('success','Advertisement Deleted');
    }
}
