<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category as ModelsCategory;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Category extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ModelsCategory::all();
        return view("admin.category.index",compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('admin.category.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $image = $request->file('image')->store('public/categories' . time());



        $image_name = $request->file('image')->getClientOriginalName();
        
        ModelsCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'created_at' => date("Y-m-d H:i:s", strtotime('now')),
            'updated_at' => date("Y-m-d H:i:s", strtotime('now')),
        ]);
        
        

        return to_route('admin.category.index')->with('success','the category has been add successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = ModelsCategory::find($id);
        return view('admin.categories.edit', compact('category'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ModelsCategory::find($id);
        return view("admin.category.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request)
    {
        $image = $request->file('image')->store('public/categories');
        DB::table("categories")->where("id", $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'created_time' => date("Y-m-d H:i:s", strtotime('now')),
            'image' => $image,
        ]);
        return to_route('admin.category.index')->with('warning','has been updated .');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ModelsCategory::find($id);
        $category->delete();
        return to_route('admin.category.index')->with('danger','the category has been deleted');
    }
}