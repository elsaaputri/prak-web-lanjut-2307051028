<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' =>  'Elsa Putri Indriana', // Jika kosong, gunakan default
            'kelas' => 'D3 Manajemen Informatika',
            'npm' => '2307051028'
        ];
        
        return view('profile', $data);
    }
}