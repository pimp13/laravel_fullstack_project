<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'category_id',
        'category_type',
        'status',
        'is_active',
        'body',
        'summary',
        'metadata',
        'user_id',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'metadata' => AsArrayObject::class,
            'status' => Status::class,
        ];
    }

    public function category(): MorphTo
    {
        return $this->morphTo();
    }
}
