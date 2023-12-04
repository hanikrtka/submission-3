<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index()
    {
        $data = [
            [
                'nama' => 'citra',
                'email' => 'citraa.11@gmail.com',
                'telp' => '08987779998'
            ],
            [
                'nama' => 'rai',
                'email' => 'rai.15@gmail.com',
                'telp' => '08987779998'
            ],
            [
                'nama' => 'siska',
                'email' => 'siska.16@gmail.com',
                'telp' => '08987779998'
            ]
        ];
        $id = '222';

        // if ($data['nama'] == 'ahmad') {
        //     $string = 'nama terdaftar';
        // } else {
        // //     $string = 'nama tidak terdaftar';
        // }
        return view('user', compact('data', 'id'));
    }
}
