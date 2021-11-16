<?php

namespace App\Http\Controllers\Custome;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer=customer::all();
        return view('admin.customer.index', compact('customer'));
    }
    public function create(){
        return view('admin.customer.create');
    }
    public function store(Request $request){

        $request->validate([
            'name' =>'required',
            'email' =>'required|unique:customer|email',
            'address' =>'required',
            'number_phone' =>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9',
            'password' =>'required|min:4|max:10',
            'password_confirm' =>'same:password',
        ],
        [
            'name.required' => 'không được bỏ trống name',
            'email.required' => 'không được bỏ trống email',
            'email.unique' => 'email đã tồn tại',
            'address.required' => 'không được bỏ trống address',
            'number_phone.required' => 'không được bỏ trống number phone',
            'number_phone.regex'=>'không đúng định dạng số điện thoại',
            'password.required' => 'không được bỏ trống password',
            'password.min'=>'không được ít hơn 4 ký tự',
            'password.max'=>'khong được nhiều hơn 10 ký tự',
            'password_confirm.same' => 'password và confirm password không giống nhau',

            ]
    
    );

        Customer::create($request->all());
       
        return redirect()->route('admin.customer.index');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('admin.customer.edit', compact('customer'));
    }
    public function update(Request $request, $id){
        $request->validate([
            
            'name' =>'required',
            'email' =>'required|regex:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
            'address' =>'required',
            'number_phone' =>'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:9|max:10',
            // 'password' =>'required|min:4|max:10',
            // 'password_confirm' =>'same:password',
        ],
        [
            'name.required' => 'không được bỏ trống name',
            'email.required' => 'không được bỏ trống email',
            'email.regex'=>'không đúng định dạng email',
            'address.required' => 'không được bỏ trống address',
            'number_phone.required' => 'không được bỏ trống number phone',
            'number_phone.regex'=>'không đúng định dạng số điện thoại',
            'number_phone.min'=>'ít nhất là 9 số ',
            'number_phone.max'=>'Số điện thoại nhiều nhất là 10 số',
            'password.required' => 'không được bỏ trống password',
            // 'password.min'=>'Không được ít hơn 4 ký tự',
            // 'password.max'=>'Không được nhiều hơn 10 ký tự',
            // 'password_confirm.same' => 'password và confirm password không giống nhau',

            ]
    
    );
        Customer::find($id)->update($request->all());
        return redirect()->route('admin.customer.index');
    }
    public function delete($id){
        Customer::find($id)->delete();
        return redirect()->route('admin.customer.index');
    
    }

    public function getlogin(){

    }
    public function postlogin(){
        
    }



}
