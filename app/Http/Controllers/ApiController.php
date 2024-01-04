<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CategoryProduct;
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
        $product = Product::where('id', $id)->first();
        return response()->json($product);
    }
    public function product_update($id, Request $Request)
    {
        $product = Product::where('id', $id)->update([
            'product'   => $Request->api_product,
            'price'     => $Request->api_price,
            'stock'     => $Request->api_stock,
        ]);
        return response()->json($id);
    }
    public function product_delete($id)
    {
        Product::where('id', $id)->delete();

        $response = array(
            'responseCode'      => '00',
            'responseStatus'    => 'Success Delete'
        );
        return response()->json($response);
    }

    public function categoryproduct_index()
    {
        $categoryproduct = CategoryProduct::get();
        return response()->json($categoryproduct);
    }

    public function categoryproduct_store(Request $Request)
    {
        CategoryProduct::insert([
            'judul'           => $Request->api_judul,
            'isi'             => $Request->api_isi,
            'createdby'       => $Request->api_createdby,
            'gambar'          => $Request->api_gambar,
        ]);

        $response = array(
            'responseCode'      => '00',
            'responseStatus'    => 'Success'

        );
        return response()->json($response);
    }

    public function create_product()
    {
        $formData = [
            'product'       => null,
            'price'         => null,
            'stock'         => null,
        ];

        return response()->json($formData);
    }
    // public function categoryproduct_by_id($id)
    // {
    //     $categoryproduct = CategoryProduct::where('id', $id)->get();
    //     return response()->json($categoryproduct);
    // }
    // public function categoryproduct_delete($id)
    // {
    //     CategoryProduct::where('id', $id)->delete();

    //     $response = array(
    //         'responseCode'      => '00',
    //         'responseStatus'    => 'Success Delete'
    //     );
    //     return response()->json($id);
    // }
}
