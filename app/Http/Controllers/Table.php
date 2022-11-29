<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableRequest;
use App\Models\Table as ModelsTable;
use Illuminate\Http\Request;

class Table extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = ModelsTable::all();

        return view ('admin.table.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest $request)
    {
        $att = $request->input();

        $table = new ModelsTable($att);
     
        $table->save();

        return to_route('admin.table.index')->with('success',"the table has been inserted successfuly .");
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
        $table = ModelsTable::find($id);
        return view('admin.table.edit' ,compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TableRequest $request, $id)
    {
       $table = ModelsTable::find($id);

       $table->update($request->input());
       $table->save();
       return to_route('admin.table.index')->with('warning','the table has been updatede successfuly .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = ModelsTable::find($id);
        $table->delete();
        return to_route('admin.table.index')->with('danger' , 'the table is deleted successfuly .');
    }
}
