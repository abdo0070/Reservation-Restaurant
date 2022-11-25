<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class Guest extends Controller
{
    public function index()
    {


        $menus = Menu::all();


        return view('welcome' , compact('menus'));
    }

    public function thankyou()
    {
        return view('frontend.thankyou');
    }
    
}
