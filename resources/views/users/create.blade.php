@extends('layouts.app') {{-- Sesuaikan kalau pakai layout lain --}}
@section('content')
<div class="container">
    <center><h2>Tambah Pengguna Baru</h2></center>

    {{-- Menampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" name="npm" id="npm" required>
        </div>

        <div class="mb-3">
    <label for="kelas_id" class="form-label">Kelas</label>
    <select name="kelas_id" class="form-control" id="kelas_id" required>
        <option value="">-- Pilih Kelas --</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="D3">D3</option>
    </select>
</div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('/user') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

@endsection
