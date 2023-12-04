<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'email',
      'photo',
      'bio',
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'author_id');
    }
}
