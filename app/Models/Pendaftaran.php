<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $fillable = ['nama_siswa', 'kelas', 'sekolah', 'tgl_lahir', 'nama_orang_tua', 'nomor_hp', 'nomor_ktp', 'pesan', 'status'];
}
