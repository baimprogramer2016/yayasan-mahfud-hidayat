<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatarBelakang extends Model
{
    use HasFactory;
    protected $table = 'latarbelakang';
    protected $fillable = ['judul', 'slug','deskripsi', 'image'];
}
