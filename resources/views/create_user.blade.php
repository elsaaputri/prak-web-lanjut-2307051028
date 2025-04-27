@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow-sm p-4" style="width: 400px; background-color: #fbf7f2; border-radius: 16px;">
        <h5 class="text-center mb-4" style="color: #5b4032; font-weight: 600;">Form Tambah User</h5>

        @if ($errors->any())
            <div class="alert alert-danger py-2 px-3 mb-3 rounded-3">
                <ul class="mb-0" style="font-size: 14px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/user') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label text-brown">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control form-control-sm shadow-none" required>
            </div>

            <!-- NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label text-brown">NPM</label>
                <input type="text" id="npm" name="npm" class="form-control form-control-sm shadow-none" required>
            </div>

            <!-- Kelas -->
            <div class="mb-3">
                <label for="kelas_id" class="form-label text-brown">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select form-select-sm shadow-none" required>
    <option value="">Pilih Kelas</option>
    @foreach ($kelas as $kelasItem)
        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
    @endforeach
</select>

            </div>

            <!-- Foto -->
            <div class="mb-4">
                <label for="foto" class="form-label text-brown">Foto</label>
                <input type="file" name="foto" class="form-control form-control-sm shadow-none">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn w-100" style="background-color: #8c6a3c; color: #fff; font-weight: 500;">
                Simpan
            </button>
        </form>
    </div>
</div>

<style>
    body {
        background-color: #f2ede7;
        font-family: 'Segoe UI', sans-serif;
        font-size: 14px;
        color: #4e3a2e;
    }

    .text-brown {
        color: #5c4430;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #c3a174;
        box-shadow: none;
    }

    .alert-danger {
        background-color: #fbe4dd;
        border: 1px solid #e5b4a1;
        color: #6e3622;
    }

    .btn {
        background-color: #8c6a3c;
        color: white;
        font-weight: 500;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #a0754b;
    }

    .card {
        background-color: #fbf7f2;
    }

    h5 {
        font-size: 18px;
        color: #5b4032;
        font-weight: 600;
    }

    .mb-3 {
        margin-bottom: 16px;
    }

    .mb-4 {
        margin-bottom: 24px;
    }
</style>
@endsection
