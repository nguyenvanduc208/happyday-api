<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CheckDate;
use Illuminate\Http\Request;

class CheckDateController extends Controller
{

    public function index()
    {
        return response(CheckDate::all(),200);
    }


    public function store(Request $request)
    {
        CheckDate::create($request->all());
        return response('ok',201);
    }

    public function show($id)
    {
        return response(CheckDate::find($id), 200);
    }


    public function update(Request $request, $id)
    {
        $model = CheckDate::where('id',$id)->update($request->all());
        return response('ok',200);
    }

    
    public function destroy($id)
    {
        CheckDate::destroy($id);
        return response('ok',200);
    }
}
