<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $tokenResult
        ];

        return response($response,201);
    }


    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
                
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized'
                    
                ]);
            }

            $user = User::where('email', $request->email)->first();

            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return [
            'message' => 'Logged out',

        ];

    }
}
