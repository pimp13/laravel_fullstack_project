<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'description'
    ];

    public function articles(): MorphMany
    {
        return $this->morphMany(Article::class, 'category');
    }
}
