<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTestimonial extends Model
{
    use HasFactory;

    protected $table = 'video_testimonial';
    protected $fillable = ['judul', 'url'];
}
