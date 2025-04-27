<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua data user
        return view('users.index', compact('users')); // Panggil view index
    }
    
    // Menampilkan halaman form untuk menambahkan user baru
    public function create()
    {
        return view('users.create'); // Tampilkan form create user
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'npm' => 'required|string|max:255|unique:users,npm',
        'kelas_id' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $fotoPath = null;
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $namaFoto = time().'_'.$foto->getClientOriginalName();
        $fotoPath = $foto->storeAs('uploads', $namaFoto, 'public');
    }

    User::create([
        'name' => $request->name,
        'npm' => $request->npm,
        'kelas_id' => $request->kelas_id,
        'foto' => $fotoPath, // disimpan sebagai string di database
    ]);

    return redirect('/user')->with('success', 'User berhasil ditambahkan');
}

    // Menampilkan detail user berdasarkan id
    public function show($id)
    {
        $user = User::findOrFail($id); // Mencari user berdasarkan id
        return view('users.show', compact('user')); // Menampilkan halaman detail user
    }

    // Menampilkan halaman form untuk mengedit user
    public function edit($id)
    {
        $user = User::findOrFail($id); // Mencari user berdasarkan id
        return view('users.edit', compact('user')); // Tampilkan form edit user
    }

    // Mengupdate data user
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi foto
        ]);

        $user = User::findOrFail($id); // Mencari user berdasarkan id

        // Jika ada foto baru yang diupload
        if ($request->hasFile('foto')) {
            // Hapus foto lama dari storage
            if ($user->foto) {
                Storage::delete('public/' . $user->foto);
            }

            // Upload foto baru
            $foto = $request->file('foto');
            $fotoPath = $foto->store('upload/img', 'public');
        } else {
            // Jika tidak ada foto baru, gunakan foto lama
            $fotoPath = $user->foto;
        }

        // Update data user di database
        $user->update([
            'name' => $request->input('name'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $fotoPath, // Update path foto
        ]);

        // Redirect kembali ke halaman list user dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
    }
}


