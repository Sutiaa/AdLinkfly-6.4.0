<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function product_index()
    {
        $product = Product::get();
        return response()->json($product);
    }

    public function product_store(Request $Request)
    {
        Product::insert([
            'product'   => $Request->api_product,
            'price'     => $Request->api_price,
            'stock'     => $Request->api_stock,
        ]);

        $response = array(
            'responseCode'      => '00',
            'responseStatus'    => 'Success'

        );
        return response()->json($response);
    }
    public function product_by_id($id)
    {
        $product = Product::where('id', $id)->get();
        return response()->json($product);
    }
    public function product_delete($id)
    {
        Product::where('id', $id)->delete();

        $response = array(
            'responseCode'      => '00',
            'responseStatus'    => 'Success Delete'
        );
        return response()->json($id);
    }
}
