<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name' ,'description','image'];
    use HasFactory;

    public function menus(){
        // every category have menus and every menu have category so the relation is m to n
        return $this->belongsToMany(Menu::class , 'category_menu');       
    }
}
