<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendahuluan extends Model
{
    use HasFactory;
    protected $table = 'pendahuluan';
    protected $fillable = ['judul', 'slug','deskripsi', 'image'];
}
