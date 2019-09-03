<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.index',[
            "products" => $products,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $products = new Product();
        $products->Product_name = Input::get("Product_name");
        $products->Product_amountin = Input::get("Product_amountin");
        $products->Product_amountout = Input::get("Product_amountout");



        $products->save();
        return redirect('admin/product');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Product_id)
    {
        //
        $products =  Product::findOrFail($Product_id);
        return view('admin.product.edit',[
            "products" => $products,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Product_id)
    {
        //
        $Product_name = $request->input('Product_name');
        $Product_amountin = $request->input('Product_amountin');
        $Product_amountout = $request->input('Product_amountout');
        $products = Product::findOrfail($Product_id);
        $products->Product_name = $Product_name;
        $products->Product_amountin = $Product_amountin;
        $products->Product_amountout = $Product_amountout;
        $products->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Product_id)
    {
        //
        $products = Product::findOrfail($Product_id);
        $products->delete();
        return redirect('admin/product');
    }
}
