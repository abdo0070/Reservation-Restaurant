<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu as ModelsMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $menu = ModelsMenu::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image,
            'description' => $request->description
        ]);

        if ($request->has('categories')) {
            $category =  $request->categories;          
                DB::table('category_menu')->insert([
                    'category_id' => $category,
                    'menu_id' => $menu->id
                ]);
        }
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
        $categories = Category::all();
        $menu = ModelsMenu::find($id);
        return view('admin.menu.edit' , compact('menu','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        $menu = ModelsMenu::find($id);
        $status = DB::table('category_menu')->where('menu_id',$id)->update([
            'category_id' => $request->categories,
        ]);
        $menu->fill($request->input());
        $menu->save();
        if ($status)
        {  
            return to_route('admin.list')->with('warning' , 'the admin has been updated succsessfuly .');
        }
        DB::table('category_menu')->insert([
            'category_id' => $request->categories,
            'menu_id' => $id
        ]);
        return to_route('admin.list')->with('warning' , 'the admin has been updated succsessfuly .');
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
