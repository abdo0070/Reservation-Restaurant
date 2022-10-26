<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name','price','description','image'];
    use HasFactory;
    public function categories(){
        $this->belongsToMany(Category::class,'category_menu');
    }
}
 