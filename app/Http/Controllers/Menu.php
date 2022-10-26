<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu as ModelsMenu;
use Illuminate\Http\Request;

class Menu extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = ModelsMenu::all();
       return view('admin.menu.index' , compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.menu.create',compact('categories'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $image = $request->file('image')->store('public/categories'.time());
        ModelsMenu::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image,
            'description' => $request->description
        ]);

        return to_route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = ModelsMenu::find($id);
        return view('admin.menu.edit' , compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = ModelsMenu::find($id);
        if ($menu){
            $menu->delete();
            return to_route('admin.menu.index');
        }
       abort(404);
    }
}
