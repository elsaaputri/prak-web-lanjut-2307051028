@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detail User</h1>
    <p>Nama: {{ $user->name }}</p> {{-- PAKAI name, bukan nama --}}
    <p>NPM: {{ $user->npm }}</p>
    <p>Kelas: {{ $user->kelas_id }}</p>

    {{-- Menampilkan Foto User --}}
    @if($user->foto)
        <img src="{{ asset('storage/'.$user->foto) }}" alt="Foto User" width="150">
    @else
        <img src="{{ asset('img/default.png') }}" alt="Default Foto" width="150">
    @endif

    <br><br>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users List</a>
</div>
@endsection
