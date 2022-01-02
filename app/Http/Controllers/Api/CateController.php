<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cate;
use App\Models\Food;
use App\Models\Resort;
use Illuminate\Http\Request;

class CateController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Cate::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cate::create($request->all());
        return response('ok', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cate = Cate::find($id);
        return response($cate, 200);
    }

    /**
     * Update the specifaied resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        $model = Cate::find($id);
        $model->update($request->all());
        return response('Ok', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $resorts = Resort::all();
        foreach ($resorts as $resort){
            if($resort->category_id == $id){
                $resort->category_id = 1;
                $resort->save();
            }
        }

        $foods = Food::all();
        foreach ($foods as $food){
            if($food->category_id == $id){
                $food->category_id = 1;
                $food->save();
            }
        }
        Cate::destroy($id);
        return response('ok',200);
    }
}