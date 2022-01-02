<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{

    public function index()
    {
        return response(Customer::all(), 200);
    }


    public function store(Request $request)
    {
        $model = new Customer();
        $model->fill($request->all());
        $model->password = Hash::make($request->password);
        $model->password_confirm = Hash::make($request->password_confirm);
        $model->save();
        return response('ok', 201);
    }


    public function show($id)
    {
        return response(Customer::find($id), 200);
    }


    public function update(Request $request, $id)
    {
        $model = Customer::where('id',$id)->update($request->all());
        return response('ok', 200);
    }


    public function destroy($id)
    {
        $ratings = Rating::all();
        foreach($ratings as $rating){
            if($rating->customer_id == $id){
                $rating->delete();
            }
        }
        Customer::destroy($id);
        return response('ok', 200);
    }
}
