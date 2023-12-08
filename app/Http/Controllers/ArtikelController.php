<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{

    //artikel.index
    public function index()
    {

        $result = Artikel::all();
        return view('artikel.index', ['result' => $result]);
    }

    //artikel.create

    public function create()
    {

        return view('artikel.create');
    }

    //artikel.store

    public function store(Request $request)
    {


        $validateData = $request->validate(
            [
                'judul' => ['required', 'string', 'min:5', 'max:255'],
                'isi'   => ['required', 'string'],
                'created_by'    => ['required', 'string'],
                'gambar' => ['sometimes', 'required', 'file', 'image', 'max:5000'],
            ]
        );




        if ($request->hasFile('gambar')) {

            $slug = Str::slug($request['judul']);
            $file = $request->gambar->getClientOriginalExtension();
            $namaFile = $slug . '-' . time() . '.' . $file;
            $request->gambar->storeAs('public/uploads', $namaFile);
        } else {
            $namaFile = 'default.jpg';
        }

        $validateData['gambar'] = $namaFile;

        Artikel::create($validateData);

        return redirect()->route('artikel.index')->with('pesan', "Artikel {$validateData['judul']} berhasil dibuat");
    }

    //artikel.show

    public function show($artikel)
    {
        $result =  Artikel::findOrFail($artikel);

        return view('artikel.show', ['result' => $result]);
    }

    //artikel.edit 
    public function edit($id)
    {
        $result = Artikel::findOrFail($id);
        return view('artikel.edit', ['result' => $result]);
    }

    //artikel.update

    public function update(Request $request, $artikel)
    {
        $result = Artikel::find($artikel);

        $validateData = $request->validate(
            [
                'judul' => ['required', 'string', 'min:5', 'max:255'],
                'isi'   => ['required', 'string'],
                'created_by'    => ['required', 'string'],
                'gambar' => ['sometimes', 'required', 'file', 'image', 'max:5000'],
            ]
        );




        if ($request->hasFile('gambar')) {

            $slug = Str::slug($request['judul']);
            $file = $request->gambar->getClientOriginalExtension();
            $namaFile = $slug . '-' . time() . '.' . $file;
            $request->gambar->storeAs('public/uploads', $namaFile);
        } else {
            $namaFile = 'default.jpg';
        }

        $validateData['gambar'] = $namaFile;

        Artikel::find($artikel)->update($validateData);


        return redirect()->route('artikel.index')->with(['pesan' => 'update', 'nama' => $result->judul]);
    }

    //delete
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();

        return redirect()->route('artikel.index')->with(['pesan' => 'delete', 'nama' => $artikel->judul]);
    }
}
