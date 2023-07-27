<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_name',
        'page_id',
        'menu_slug',
        'up_menu',
        'menu_status',
        'list'
    ];

    public function children(){
        return $this->hasMany(Menu::class,'up_menu','id');
    }
}
