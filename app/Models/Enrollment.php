<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cpm',
        'theme_category',
        'camera_brand',
        'enroll_at',
        
    ];
}
