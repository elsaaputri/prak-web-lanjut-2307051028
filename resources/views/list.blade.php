@extends('layouts.app')

@section('content')
<div class="container py-4 d-flex justify-content-center">
    <div class="w-100" style="max-width: 850px;">
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="card border-0 shadow-sm rounded-4" style="background-color: #f6f1eb;">
            <div class="card-body px-4 py-3">
                <h4 class="fw-semibold text-center mb-4" style="color: #4b3621;">Daftar Pengguna</h4>

                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-head">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->npm }}</td>
                                <td>{{ $user->kelas }}</td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-muted">Belum ada data user.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Tombol tambah di bawah tabel, tengah -->
                <div class="text-center mt-4">
                    <a href="{{ url('user/create') }}" class="btn btn-brown-dark">+ Tambah Pengguna</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #ece6dc;
        font-family: 'Segoe UI', sans-serif;
        font-size: 14px;
        color: #423c34;
    }

    .table-head {
        background-color: #6e4c2e;
        color: white;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f1e3d3;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f4ef;
    }

    .btn-detail {
        background-color: #a97044;
        color: white;
        font-size: 13px;
        padding: 5px 12px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-detail:hover {
        background-color: #8c5c39;
    }

    /* Tombol Tambah Pengguna Coklat Gelap */
    .btn-brown-dark {
        background-color: #7a3b12; /* Coklat gelap */
        color: white;
        padding: 10px 20px;
        font-weight: 500;
        border: none;
        border-radius: 6px;
        transition: 0.3s;
        font-size: 16px;
        text-decoration: none;
    }

    .btn-brown-dark:hover {
        background-color: #5c2b0a; /* Warna lebih gelap saat hover */
    }

    .alert-success {
        background-color: #5d7b57;
        color: white;
        border-radius: 6px;
        font-weight: 500;
    }

    h4 {
        margin-bottom: 0;
        font-size: 20px;
    }
</style>
@endsection
