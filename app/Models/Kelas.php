<?php  
namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;  

class Kelas extends Model
{
    use HasFactory;
    
    protected $table = 'kelas'; // Menentukan tabel yang digunakan

    public function getKelas()
    {
        return $this->all(); // Mengambil semua data kelas
    }
}
