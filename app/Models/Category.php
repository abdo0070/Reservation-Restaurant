<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name' ,'description','image'];
    use HasFactory;

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'category_menu');
    }
}
