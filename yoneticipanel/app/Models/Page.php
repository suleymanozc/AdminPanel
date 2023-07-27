<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_name',
        'page_description',
        'page_tags',
        'page_content',
        'page_status',
        'page_image'
    ];
}
