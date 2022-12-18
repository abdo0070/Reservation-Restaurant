<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Guest extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        

        
        $is_login = Auth::check();

        return view('welcome' , compact('menus' , 'is_login'));
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
