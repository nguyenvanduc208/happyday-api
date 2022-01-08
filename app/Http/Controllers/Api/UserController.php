<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response(User::all(), 200);
    }


    public function show($id)
    {
        return response(User::find($id), 200);
    }


    public function update(Request $request, $id)
    {
        $model = User::where('id',$id)->update($request->all());
        return response('ok', 200);
    }


    public function destroy($id)
    {
        User::destroy($id);
        return response('ok', 200);
    }
}
