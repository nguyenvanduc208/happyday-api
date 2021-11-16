<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cate;
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
    public function show(Cate $cate)
    {
        return response($cate, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cate $cate)
    {
        $cate->update($request->all());
        return response('Ok', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cate $cate)
    {
        $cate->delete();
        return response('ok',200);
    }
}