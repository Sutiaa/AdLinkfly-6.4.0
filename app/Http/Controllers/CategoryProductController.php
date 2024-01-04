<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categoryproduct = CategoryProduct::get();
        return view('categoryproduct.index', compact('categoryproduct'));
    }
    public function create()
    {
        return view('categoryproduct.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'   => 'required|min:5|max:255',
            'isi'     => 'string',
            'createdby'     => 'string',
            'gambar'  => 'image',
        ], [
            'judul.required' => 'Judul Produk harus di isi.',
            'isi.required' => 'Masukkan isi.',
            'createdby.required' => 'Nama Pembuat harus di isi.',
            'gambar.required'   => 'Masukkan Gambar',
        ]);

        $validator->validate();
        CategoryProduct::create([
            'judul'       => $request->judul,
            'isi'       => $request->isi,
            'createdby'       => $request->createdby,
            'gambar'    => $request->image,
        ]);

        return redirect('/categoryproduct');
    }
    public function edit($id)
    {
        $categoryproduct = CategoryProduct::find($id);
        return view('categoryproduct.edit', compact('categoryproduct'));
    }
    public function update($id, Request $request)
    {
        $categoryproduct = CategoryProduct::find($id);
        $categoryproduct->judul = $request->judul;
        $categoryproduct->isi = $request->isi;
        $categoryproduct->createdby = $request->createdby;
        $categoryproduct->gambar = $request->gambar;
        $categoryproduct->save();
        return redirect('/categoryproduct')->with('success', 'Data produk berhasil di update');
    }
    public function destroy($id)
    {
        $categoryproduct = CategoryProduct::find($id);
        if ($categoryproduct) {
            $categoryproduct->delete();
            return redirect('/categoryproduct')->with('success', 'Data produk berhasil di delete');
        } else {
            return redirect('/categoryproduct')->with('success', 'Data produk gagal di delete');
        }
    }
}
