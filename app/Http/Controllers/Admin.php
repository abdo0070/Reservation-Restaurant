<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Controller
{
    public function index()
    {
        
        return view('admin.index');
    }
    public function list()
    {
        $admins = DB::table('users')->where('is_admin' ,1)->get();
        return view('admin.admins.index' , compact('admins'));
    }    
    public function create()
    {

        return view('admin.admins.create');

    }

    public function store(AdminRequest $request)
    {
        $admin = new User($request->input());
        $admin->password = Hash::make($request->get('password'));
        $admin->is_admin = true;
        $respone = $admin->save();

        if ($respone)
        {
            return to_route('admin.list')->with('success' , 'the admin has been added succsessfuly .');
        }
        return to_route('admin.list')->with('danger' , 'something goes wrong .');  
    }

    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.admins.edit' , compact('admin'));
    }

    public function update(AdminRequest $request)
    {
        $admin = User::find($request->get('id'));
        
        $admin->update($request->input());

        $admin->save();
        
        return to_route('admin.list')->with('warning' , 'the admin has been updated succsessfuly .');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return to_route('admin.list')->with('danger' , 'the admin has been deleted succsessfuly .');
    }

}
