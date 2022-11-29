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

    public function thankyou(Request $request)
    {
        if ($request->session()->get('thanks'))
        {
            $request->session()->forget('thanks');
            return view('frontend.thankyou');
        }
        return abort(403);      
    }
    
}
