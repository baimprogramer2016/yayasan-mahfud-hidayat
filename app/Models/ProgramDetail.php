<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDetail extends Model
{
    use HasFactory;
    protected $table = 'programdetail';
    protected $fillable = ['judul', 'slug','deskripsi'];
}
