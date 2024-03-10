<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $table = "children";

    protected $fillable = [
        'title',
        'slug',
        'photo',
        'video',
        'content',
    ];

    protected $casts = ['photo'=> 'array'];
}
