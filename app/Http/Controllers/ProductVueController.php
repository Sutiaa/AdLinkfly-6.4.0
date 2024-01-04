<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductVueController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('product.index_vue', compact('product'));
    }
}
