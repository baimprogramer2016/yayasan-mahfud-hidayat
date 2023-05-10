<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturalBg extends Model
{
    use HasFactory;
    protected $table = 'struktural_bg';
    protected $fillable = ['deskripsi', 'image'];
}
