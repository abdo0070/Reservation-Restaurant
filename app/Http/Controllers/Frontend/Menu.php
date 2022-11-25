<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu as ModelsMenu;
use Illuminate\Http\Request;

class Menu extends Controller
{
    public function index()
    {

        $menus = ModelsMenu::all();

        return view('frontend.menu.index', compact('menus'));
    }

    public function show()
    {
        return view('frontend.menu.show');
    }
}
