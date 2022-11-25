<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Category extends Controller
{
    public function index()
    {
        $categories = ModelsCategory::all();
        return view('frontend.category.index' , compact('categories'));
    }

    public function show(Category $category)
    {

      $menus =  DB::table('category_menu')
        ->select('menus.name AS name')
        ->join('menus','category_menu.menu_id','=' , 'menus.id')
        ->distinct()
        ->get();

        return view('frontend.category.show');
    }
}
