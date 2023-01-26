<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateUrl extends Model
{
    use HasFactory;
    
    protected $table ='update_url';
    protected $fillable = ['nama','url'];
}
