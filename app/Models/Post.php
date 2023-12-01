<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'user_id',
        'meta_keywords',
        'meta_title',
        'meta_description',
        'published_at',
    ];
}
