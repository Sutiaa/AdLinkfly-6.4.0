<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('product.index', compact('product'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        Product::create([
            'product'       => $request->product,
            'price'       => $request->price,
            'stock'       => $request->stock,
        ]);

        return redirect('/product');
    }
    //   public function show ($product)
    //   {
    //     $product =  Product::findOrFail($product);

    //     return view('product.show', compact('product'));
    //   }
    //   public function edit($id)
    //   {
    //     $product =  Product::findOrFail($product);

    //     return view('product.edit', compact('product'));
    //   }
    //   public function DB::update(Request $request,$product);
    //   {
    //     $result = Product::find($product);

    //     $validateData = $request->validate(
    //         [

    //         ]
    //     )
    //   }
}
