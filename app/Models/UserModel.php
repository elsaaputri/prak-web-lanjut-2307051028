<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // pastikan nama tabelnya 'users', atau sesuaikan kalau beda
    protected $fillable = [
        'name',
        'npm',
        'kelas_id',
        'foto',
    ];
}