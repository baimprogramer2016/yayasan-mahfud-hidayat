<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktural extends Model
{
    use HasFactory;
    protected $table = 'struktural';
    protected $fillable = ['nama', 'jabatan','kutipan','image'];
}
