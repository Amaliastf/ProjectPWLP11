<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table="mahasiswas"; //Eloquent akan membuat model mahasiswa record di table mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'Nim'; //Memanggil isi DB Dengan primaryKey
    public $incrementing = false;

    protected $fillable = [
        'Nim',
        'Nama',
        'kelas_id',
        // 'prodi',
        'Jurusan',
        'No_Handphone',
        ];
}
