@extends('layouts.app')
@section('content')

<div class="container py-5">

    <!-- Judul Besar -->
    <h1 class="text-white text-center mb-3" style="font-weight: bold;">
        📋 Daftar Pengguna
    </h1>

    <!-- Subjudul -->
    <p class="text-white text-center mb-5">
        Berikut adalah daftar pengguna yang terdaftar dalam sistem.
    </p>

    <!-- Tombol Tambah -->
    <div class="text-end mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-primary">+ Tambah Pengguna Baru</a>
    </div>

    <!-- Tabel User -->
    <div class="table-responsive">
        <table class="table table-hover table-striped bg-white rounded shadow">
            <thead class="table-primary text-center">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas_id }}</td>
                    <td>
                        @if($user->foto)
                            <img src="{{ asset('storage/'.$user->foto) }}" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                        @else
                            <img src="{{ asset('img/default.png') }}" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/user/'.$user->id) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
