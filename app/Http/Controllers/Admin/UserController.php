<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin.users.index', compact('user'));
    }
    public function create()
    {

        return view('admin.users.create');
    }
    public function store(Request $request)
    {
       
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:6|max:32',
                'password_confirm' => 'same:password',

            ],
            [
                'name.required' => 'không được bỏ trống name',
                'email.required' => 'không được bỏ trống email',
                'password.required' => 'không được bỏ trống password',
                'password_confirm.same' => 'không được bỏ trống confirm password',

  
            ],
          

        );

        User::create($request->all());
        return redirect()->route('admin.users.index');
    }
    public function edit($id)
    {
        
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:6|max:32',
                'password_confirm' => 'same:password',

            ],
            [
                'name.required' => 'không được bỏ trống name',
                'email.required' => 'không được bỏ trống email',
                'password.required' => 'không được bỏ trống password',
                'password_confirm.same' => 'không được bỏ trống confirm password',

  
            ],
          

        );
        User::find($id)->update($request->all());
        return redirect()->route('admin.users.index');
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users.index');
    }
}
