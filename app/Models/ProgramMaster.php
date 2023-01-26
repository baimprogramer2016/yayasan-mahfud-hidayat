<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMaster extends Model
{
    use HasFactory;
    protected $table = 'programmaster';
    protected $fillable = ['judul', 'slug','deskripsi','image'];
}
