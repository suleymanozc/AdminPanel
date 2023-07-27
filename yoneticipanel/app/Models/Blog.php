<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_title',
        'blog_description',
        'blog_tags',
        'blog_content',
        'blog_image',
        'blog_author',
        'blog_slug',
        'blog_categoryId',
        'blog_status',

    ];
}
