<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chairmen extends Model
{
    use HasFactory;

    protected $table = 'chairmens';

    protected $fillable = ['title', 'image','description'];

}
