<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\UserModel; 
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function create()
    {
        return view('create_user', [
            'kelas' => Kelas::all(),
        ]);
        
    }

    public function store(UserRequest $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);
    
        // Simpan data ke database
        $user = UserModel::create($validatedData);
    
        // Memuat relasi kelas
        $user->load('kelas');
    
        // Mengembalikan tampilan profile dengan data yang sudah disimpan
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }

}