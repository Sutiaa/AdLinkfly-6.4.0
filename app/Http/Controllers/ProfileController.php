<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = "Sutia";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "21 April 2001";

        $data_array = array(
            'nama' => array(
                'Sutia',
                'Azhira',
                'Ayu',
            ),
        );

        $list = array(
            'nama' => array(),
        );

        return view('profile', compact(
            'nama',
            'alamat',
            'tanggal_lahir',
            'data_array',
            'list'
        ));
    }
}
