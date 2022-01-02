<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Resort;
use Illuminate\Http\Request;
use App\Http\Resources\Resort as ResortResource;
use App\Models\Rating;

class ResortController extends Controller
{
    public function index()
    {
        $resorts = Resort::all();
        return response($resorts,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Resort::create($request->all());
        return response('ok', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Resort $Resort)
    {
        $response = array(
            'status' => true,
            'message' => 'Success',
            'data' => [
                'id' => $Resort->id,
                'name' => $Resort->name,
                'price' => $Resort->price,
                'limit' => $Resort->limit, 
                'size' => $Resort->size, 
                'view' => $Resort->view,
                'bed' => $Resort->bed,
                'category_id' => $Resort->category_id, 
                'category_name' =>$Resort->category->name,
                'image_id' => $Resort->image_id,
                'image_path' => $Resort->image->path,
                'desc' => $Resort->desc,
                'create_at' => $Resort->created_at,
                'update_at' => $Resort->updated_at 
            ]
        );



        return response($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resort $Resort)
    {
        $Resort->update($request->all());
        return response('ok', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resort $Resort)
    { 
        $ratings = Rating::all();
        foreach($ratings as $rating){
            if($rating->resort_id == $Resort->id){
                $rating->delete();
            }
        }
        $Resort->delete();
        return response('ok', 200);
    }
}

