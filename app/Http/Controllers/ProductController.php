<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('products.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'product' => 'required',
                'status' => 'required',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'suplayer' => 'required',
                'product_image' => 'required|mimes:jpg,jpeg,png,gif,jfif|image|max:5048',
            ]
        );

        $path = $request->file('product_image')->store('public/uploads');

        $product = new Product();
        $product->product = $request['product'];
        $product->status = $request['status'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->suplayer = $request['suplayer'];
        $product->product_image = basename($path);
        $product->save();

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'product' => 'required',
                'status' => 'required',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'suplayer' => 'required',
                'product_image' => 'mimes:jpg,jpeg,png,gif,jfif|image|max:5048',
            ]
        );

        $path = $request->file('product_image')->store('public/uploads');

        $product = Product::find($id);
        $product->product = $request['product'];
        $product->status = $request['status'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->suplayer = $request['suplayer'];
        $product->product_image = basename($path);
        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
